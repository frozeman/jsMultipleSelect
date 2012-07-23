jsMultipleSelect
================
Creates a multiple selection where you can have multiple option boxes selecting into one destination.<br>
You can also change the behavior of the option boxes: remove the options after selecting, or be able to add options multiple times to the selection.

![Screenshot](https://github.com/frozeman/jsMultipleSelect/raw/master/screenshot.png)

How to use
----------
Add mootools core and the jsMultipleSelect.js to your website.
The simplest way to use it is to just call

    #JS

    window.addEvent('domready',function(){

      new jsMultipleSelect();

    });

An have the right HTML in the page.

If you want to customize it you can use the follwing options:

    #JS

    window.addEvent('domready',function(){

      new jsMultipleSelect({
        highlightColor:'#cccccc',
        removeButton: new Element('a',{'html':'remove'}),
        removeButtonClass: 'remove'
      });

    });

  - options:

    highlightColor:  The color which will be used to highlight the selectionDropBox when a element is add (default: "#cedee6")
    removeButton:  The remove link which will be add to the all selected item (default: "new Element('a',{'html':'&#215;'})")
    removeButtonClass: The class which will be add to the remove link


The selection &lt;ul&gt; elements must have the following format.
Each &lt;ul&gt; element with choices must have a "jsMultipleSelect" class.
Each containing &lt;ul&gt; element must have a "jsMultipleSelectItem" class.

  Attributes:

  - data-name: this is the name aatribute you inputs will get to post and array through the form, when submited
  - data-jsMultipleSelect: the id of your selections, to connect selections and selectionDropBoxes. Each pair of selections and dropBox must have a unique id.
  - data-value: each li must have this attribute, which contains the value which the created input will get

    #HMTL

    &lt;ul class="jsMultipleSelect" data-name="myInputFieldName" data-jsMultipleSelect="1"&gt;
      &lt;li class="filter"&gt;&lt;input type="text" placeholder="Type here to filter"&gt;&lt;/li&gt;

      &lt;li class="jsMultipleSelectItem" data-value="myValue1"&gt;Value Name 1&lt;/li&gt;
      &lt;li class="jsMultipleSelectItem" data-value="myValue2"&gt;Value Name 2&lt;/li&gt;
    &lt;/ul&gt;