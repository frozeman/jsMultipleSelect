jsMultipleSelect
================
Creates a multiple selection where you can have multiple option boxes selecting into one destination.<br>
You can also change the behavior of the option boxes: remove the options after selecting, or be able to add options multiple times to the selection.

![Screenshot](https://github.com/frozeman/jsMultipleSelect/raw/master/screenshot.png)

The Javascript
--------------

Add mootools core and the jsMultipleSelect.js to your website.
<b>The simplest way</b> to use it is to just call


    window.addEvent('domready',function(){

      new jsMultipleSelect();

    });


An have the right HTML in the page.

If you <b>want to customize</b> it you can use the follwing options:


    window.addEvent('domready',function(){

      new jsMultipleSelect({
        highlightColor:'#cccccc',
        removeButton: new Element('a',{'html':'remove'}),
        removeButtonClass: 'remove'
      });

    });


  - **options**
    - `highlightColor`  The color which will be used to highlight the selection destination when a element gets added.
    <br>(default: `#cedee6`)
    - `removeButton`  The remove button which will be add to the all options in the destination box.
    <br>(default: `new Element('a',{'html':'&#215;'})`)
    - `removeButtonClass` The class which will be add to the remove button.
    <br>(default: `remove`)


The HTML markup
---------------

You need at least one <i>option box</i> `<ul>` element with the class <b>"jsMultipleSelect"</b><br>
and one <i>destination box</i> `<ul>` element with the class <b>"jsMultipleSelectDestination"</b>.

### The <i>option boxes</i> `<ul>` elements


    <ul class="jsMultipleSelect" data-name="myInputFieldName" data-type="duplicates" data-jsMultipleSelect="1">
        <li class="filter"><input type="text" placeholder="Type here to filter"></li>

        <li class="jsMultipleSelectItem" data-value="myValue1">Value Name 1></li>
        <li class="jsMultipleSelectItem" data-value="myValue2">Value Name 2></li>
        <li class="jsMultipleSelectItem" data-value="myValue3" data-type="remove">Removeable Value Name 3></li>
    </ul>


**The `<ul>` element Attributes**
- `data-name` this is the name attribute which will be add to the hidden input fields, which are created when adding a selection to the <i>destination box</i>.
- `data-jsMultipleSelect` the id which connects your <i>option box(es)</i> with your <i>destination box</i>.
- `data-type`
  - "remove" removes the <i>options</i> when selected.
  - "duplicates" allows to add <i>options</i> multiple times to the <i>destination box</i>.
  - don't add this attribute, if you want that the <i>options</i> stay in the box but can be added only once to the <i>destination box</i> (default).

**The `<li>` elements Attributes**
- `data-value` the value which will be add to the hidden input fields, created when selecting this value.
- `data-type` you can also add the data-type attribute only/also to the <i>option</i> `<li>` elements to specify their behavior.

<b>To add a Filter</b> add the follwoing `li` element to your <i>option boxes</i>: `<li class="filter"><input type="text" placeholder="Type here to filter"></li>`.

<br>

### The <i>destination box</i> `<ul>` element


    <ul class="jsMultipleSelectDestination" data-jsMultipleSelect="1">
        <li data-value="myValue2" data-name="myInputFieldName"></li>
        <li data-value="myValue3" data-name="myInputFieldName"></li>
    </ul>


**The `<ul>` element Attributes**
- `data-jsMultipleSelect` the id which connects your <i>option box(es)</i> with your <i>destination box</i>.

**The `<li>` elements Attributes**
- `data-value` the value which the already selected <i>option</i> will have.
- `data-name` the name attribute of the input field which this <i>option</i> has.



