jsMultipleSelect
================
Creates a multiple selection where you can have multiple option boxes selecting into one destination.<br>
You can also change the behavior of the option boxes: remove the options after selecting, or be able to add options multiple times to the selection.

![Screenshot](https://github.com/frozeman/jsMultipleSelect/raw/master/screenshot.png)

How to use
----------

###  The Javascript

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

highlightColor:  The color which will be used to highlight the selection destination when a element gets added (default: `#cedee6`)
removeButton:  The remove link which will be add to the all selected item (default: `new Element('a',{'html':'&#215;'})`)
removeButtonClass: The class which will be add to the remove link.


###  The HTML markup

You need at least on options `<ul>` element with the class "jsMultipleSelect"<br>
and one destination `<ul>` element with the class "jsMultipleSelectDestination".

The options `<ul>` elements must have the following format.

    <ul class="jsMultipleSelect" data-name="myInputFieldName" data-type="duplicates" data-jsMultipleSelect="1">
        <li class="filter"><input type="text" placeholder="Type here to filter"></li>

        <li class="jsMultipleSelectItem" data-value="myValue1">Value Name 1></li>
        <li class="jsMultipleSelectItem" data-value="myValue2">Value Name 2></li>
        <li class="jsMultipleSelectItem" data-value="myValue3" data-type="remove">Removeable Value Name 3></li>
    </ul>

**Attributes**

The `<ul>` element
- `data-name` this is the name attribute which the hidden input fiels will get which are created when adding a selection to the destination box.
- `data-jsMultipleSelect` the id which connect your option boxes with a destination box.
- `data-type`
  - "remove" removes the options when selected.
  - "duplicates" allows to add options multiple times to the destination box.
  - don't add this attribute, if you want that the options stay in the box but can be added only once to the destination box (default).

The `<li>` elements
- `data-value` the value which will be add to the hidden input field created when selecting this value.
- `data-type` you can also add the data-type attribute only or also to the `<li>` elements to specify their behavior.

You can add the follwoing `li` element to add a filter input: `<li class="filter"><input type="text" placeholder="Type here to filter"></li>`.


