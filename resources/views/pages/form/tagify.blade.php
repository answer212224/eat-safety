<x-base-layout :scrollspy="true">

    <x-slot:pageTitle>
        {{$title}} 
    </x-slot>

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <x-slot:headerFiles>
        <!--  BEGIN CUSTOM STYLE FILE  -->
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/tagify/tagify.css')}}">
        @vite(['resources/scss/light/plugins/tagify/custom-tagify.scss'])
        @vite(['resources/scss/dark/plugins/tagify/custom-tagify.scss'])
        <!--  END CUSTOM STYLE FILE  -->
    </x-slot>
    <!-- END GLOBAL MANDATORY STYLES -->

    <x-slot:scrollspyConfig>
        data-bs-spy="scroll" data-bs-target="#navSection" data-bs-offset="100"
    </x-slot>
    
    <!-- BREADCRUMB -->
    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tagify</li>
            </ol>
        </nav>
    </div>
    <!-- /BREADCRUMB -->

    <div id="navSection" data-bs-spy="affix" class="nav  sidenav">
        <div class="sidenav-content">
            <a href="#Basic" class="active nav-link">Basic</a>
            <a href="#Mix" class="nav-link">Mix</a>
            <a href="#SuggestionsList" class="nav-link">Suggestions List</a>
            <a href="#UserList" class="nav-link">User List</a>
            <a href="#SingleValueSelect" class="nav-link">Single Value Select</a>
        </div>
    </div>
    
    <div class="row layout-top-spacing" id="cancel-row">
    
        <div id="Basic" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Basic</h4>
                        </div>            
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <input name='basic' value='tag1, tag2 autofocus'>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input name='basic' value='tag1, tag2 autofocus'&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container show-code">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
// The DOM element you wish to replace with Tagify
var input = document.querySelector('input[name=basic]');

// initialize Tagify on the above input node reference
new Tagify(input)
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="Mix" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Mix Text & Tags</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Use <code>@</code> Symbol to add Programming language and <code>#</code> Symbol to add Companies. For Example - <code>@v</code> and <code>#a</code> </p>

                    <textarea name='mix'>Hello, My name is [[Shaun]]. I am a [[{"id": 100, "text": "React", "title": "facebook"}]] Developer. I am currently working in [[{"value":"Microsoft"}]]</textarea>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;textarea name='mix'&gt;Hello, My name is [[Shaun]]. I am a [[{&quot;id&quot;: 100, &quot;text&quot;: &quot;React&quot;, &quot;title&quot;: &quot;facebook&quot;}]] Developer. I am currently working in [[{&quot;value&quot;:&quot;Microsoft&quot;}]]&lt;/textarea&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
* Mix Text &amp; Tags
*  
**/ 

// Define two types of whitelists, each used for the dropdown suggestions menu,
// depending on the prefix pattern typed (@/#). See settings below.
var whitelist_1 = [
{ value: 100, text: 'React', title: 'facebook' },
{ value: 200, text: 'Vue', title: 'Kelly Young' },
{ value: 300, text: 'Angular', title: 'Google' },
{ value: 400, text: 'Svelte', title: 'Rich Harris' },
{ value: 500, text: 'NextJS', title: 'Vercel' },
{ value: 600, text: 'Python', title: 'Guido van Rossum' },
{ value: 700, text: 'PHP', title: 'Rasmus Lerdorf' },
{ value: 800, text: 'Strapi', title: 'Open Source' },
{ value: 900, text: 'Wordpress', title: 'Automatic' },
{ value: 1000, text: 'Typescript', title: 'Microsoft' }
]

// Second whitelist, which is shown only when starting to type &quot;#&quot;.
// Thiw whitelist is the most simple one possible.
var whitelist_2 = ['Microsoft', 'Apple', 'Google', 'Samsung', 'Esty', 'Github', 'Amazon', 'Ebay', 'FedEx', 'Facebook'];


// initialize Tagify
var input = document.querySelector('[name=mix]'),
// init Tagify script on the above inputs
mixMatch = new Tagify(input, {
mode: 'mix',  // &lt;--  Enable mixed-content
pattern: /@|#/,  // &lt;--  Text starting with @ or # (if single, String can be used here)
tagTextProp: 'text',  // &lt;-- the default property (from whitelist item) for the text to be rendered in a tag element.
// Array for initial interpolation, which allows only these tags to be used
whitelist: whitelist_1.concat(whitelist_2).map(function(item){
return typeof item == 'string' ? {value:item} : item
}),
dropdown : {
enabled: 1,
position: 'text', // &lt;-- render the suggestions list next to the typed text (&quot;caret&quot;)
mapValueTo: 'text', // &lt;-- similar to above &quot;tagTextProp&quot; setting, but for the dropdown items
highlightFirst: true  // automatically highlights first sugegstion item in the dropdown
},
callbacks: {
add: console.log,  // callback when adding a tag
remove: console.log   // callback when removing a tag
}
})


// A good place to pull server suggestion list accoring to the prefix/value
mixMatch.on('input', function(e){
var prefix = e.detail.prefix;

// first, clean the whitlist array, because the below code, while not, might be async,
// therefore it should be up to you to decide WHEN to render the suggestions dropdown
// tagify.settings.whitelist.length = 0;

if( prefix ){
if( prefix == '@' )
mixMatch.whitelist = whitelist_1;

if( prefix == '#' )
mixMatch.whitelist = whitelist_2;

if( e.detail.value.length &gt; 1 )
mixMatch.dropdown.show(e.detail.value);
}

console.log( mixMatch.value )
console.log('mix-mode &quot;input&quot; event value: ', e.detail)
})

mixMatch.on('add', function(e){
console.log(e)
})
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="SuggestionsList" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Suggestions List</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <p>Search Languages with there <code>First Capital Letter</code> For Example: <code>JSON</code> with J </p>
                    <input name='tags3' value='[{"value":"React"}, {"value":"Angular"}]' pattern='^[A-Za-z_✲ ]{1,15}$'>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input name='tags3' value='[{&quot;value&quot;:&quot;React&quot;}, {&quot;value&quot;:&quot;Angular&quot;}]' pattern='^[A-Za-z_✲ ]{1,15}$'&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
* Render Suggestion
*  
**/ 

var input = document.querySelector('input[name=tags3]'),
tagify = new Tagify(input, {
pattern             : /^.{0,20}$/,  // Validate typed tag(s) by Regex. Here maximum chars length is defined as &quot;20&quot;
delimiters          : &quot;,| &quot;,        // add new tags when a comma or a space character is entered
keepInvalidTags     : true,         // do not remove invalid tags (but keep them marked as invalid)
editTags            : {
clicks: 2,              // single click to edit a tag
keepInvalid: false      // if after editing, tag is invalid, auto-revert
},
maxTags             : 6,
blacklist           : [&quot;foo&quot;, &quot;bar&quot;, &quot;baz&quot;],
whitelist           : [&quot;React&quot;,&quot;Angular&quot;,&quot;TypeScript&quot;,&quot;Vue&quot;,&quot;Python&quot;,&quot;Wordpress&quot;,&quot;Svelte&quot;,&quot;PHP&quot;,&quot;Javascript&quot;,&quot;HTML&quot;,&quot;CSS&quot;,&quot;JSON&quot;,&quot;XML&quot;,&quot;Markdown&quot;,&quot;Go&quot;,&quot;C++&quot;,&quot;C#&quot;,&quot;Java&quot;,&quot;Docker&quot;,&quot;Perl&quot;,&quot;Ruby&quot;,&quot;Rust&quot;,&quot;NodeJS&quot;,&quot;SQL&quot;,&quot;SQLite&quot;,&quot;MonogDB&quot;,&quot;MYSQL&quot;,&quot;Swift&quot;,&quot;SCSS&quot;,&quot;SASS&quot;],
transformTag        : transformTag,
backspace           : &quot;edit&quot;,
placeholder         : &quot;Type something&quot;,
dropdown : {
enabled: 1,            // show suggestion after 1 typed character
fuzzySearch: false,    // match only suggestions that starts with the typed characters
position: 'text',      // position suggestions list next to typed text
caseSensitive: true,   // allow adding duplicate items if their case is different
},
templates: {
dropdownItemNoMatch: function(data) {
return `&lt;div class='${this.settings.classNames.dropdownItem}' tabindex=&quot;0&quot; role=&quot;option&quot;&gt;
No suggestion found for: &lt;strong&gt;${data.value}&lt;/strong&gt;
&lt;/div&gt;`
}
}
})

// generate a random color (in HSL format, which I like to use)
function getRandomColor(){
function rand(min, max) {
return min + Math.random() * (max - min);
}

var h = rand(1, 360)|0,
s = rand(40, 70)|0,
l = rand(65, 72)|0;

return 'hsl(' + h + ',' + s + '%,' + l + '%)';
}

function transformTag( tagData ){
tagData.color = getRandomColor();
tagData.style = &quot;--tag-bg:&quot; + tagData.color;

if( tagData.value.toLowerCase() == 'shit' )
tagData.value = 's✲✲t'
}

tagify.on('add', function(e){
console.log(e.detail)
})

tagify.on('invalid', function(e){
console.log(e, e.detail);
})

var clickDebounce;

tagify.on('click', function(e){
const {tag:tagElm, data:tagData} = e.detail;

// a delay is needed to distinguish between regular click and double-click.
// this allows enough time for a possible double-click, and noly fires if such
// did not occur.
clearTimeout(clickDebounce);
clickDebounce = setTimeout(() =&gt; {
tagData.color = getRandomColor();
tagData.style = &quot;--tag-bg:&quot; + tagData.color;
tagify.replaceTag(tagElm, tagData);
}, 200);
})

tagify.on('dblclick', function(e){
// when souble clicking, do not change the color of the tag
clearTimeout(clickDebounce);
})
</pre>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="UserList" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Users List</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <input name='users-list-tags' value='abatisse2@nih.gov, Justinian Hattersley'>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input name='users-list-tags' value='abatisse2@nih.gov, Justinian Hattersley'&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
* Users List
*  
**/ 


// https://www.mockaroo.com/


var inputElm = document.querySelector('input[name=users-list-tags]');

function tagTemplate(tagData){
return `
&lt;tag title=&quot;${tagData.email}&quot;
contenteditable='false'
spellcheck='false'
tabIndex=&quot;-1&quot;
class=&quot;tagify__tag ${tagData.class ? tagData.class : &quot;&quot;}&quot;
${this.getAttributes(tagData)}&gt;
&lt;x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'&gt;&lt;/x&gt;
&lt;div&gt;
&lt;div class='tagify__tag__avatar-wrap'&gt;
    &lt;img onerror=&quot;this.style.visibility='hidden'&quot; src=&quot;${tagData.avatar}&quot;&gt;
&lt;/div&gt;
&lt;span class='tagify__tag-text'&gt;${tagData.name}&lt;/span&gt;
&lt;/div&gt;
&lt;/tag&gt;
`
}

function suggestionItemTemplate(tagData){
return `
&lt;div ${this.getAttributes(tagData)}
class='tagify__dropdown__item ${tagData.class ? tagData.class : &quot;&quot;}'
tabindex=&quot;0&quot;
role=&quot;option&quot;&gt;
${ tagData.avatar ? `
&lt;div class='tagify__dropdown__item__avatar-wrap'&gt;
&lt;img onerror=&quot;this.style.visibility='hidden'&quot; src=&quot;${tagData.avatar}&quot;&gt;
&lt;/div&gt;` : ''
}
&lt;strong&gt;${tagData.name}&lt;/strong&gt;
&lt;span&gt;${tagData.email}&lt;/span&gt;
&lt;/div&gt;
`
}

// initialize Tagify on the above input node reference
var usrList = new Tagify(inputElm, {
tagTextProp: 'name', // very important since a custom template is used with this property as text
enforceWhitelist: true,
skipInvalid: true, // do not remporarily add invalid tags
dropdown: {
closeOnSelect: false,
enabled: 0,
classname: 'users-list',
searchKeys: ['name', 'email']  // very important to set by which keys to search for suggesttions when typing
},
templates: {
tag: tagTemplate,
dropdownItem: suggestionItemTemplate
},
whitelist: [
{
&quot;value&quot;: 1,
&quot;name&quot;: &quot;Justinian Hattersley&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=1&quot;,
&quot;email&quot;: &quot;jhattersley0@ucsd.edu&quot;
},
{
&quot;value&quot;: 2,
&quot;name&quot;: &quot;Antons Esson&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=2&quot;,
&quot;email&quot;: &quot;aesson1@ning.com&quot;
},
{
&quot;value&quot;: 3,
&quot;name&quot;: &quot;Ardeen Batisse&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=3&quot;,
&quot;email&quot;: &quot;abatisse2@nih.gov&quot;
},
{
&quot;value&quot;: 4,
&quot;name&quot;: &quot;Graeme Yellowley&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=4&quot;,
&quot;email&quot;: &quot;gyellowley3@behance.net&quot;
},
{
&quot;value&quot;: 5,
&quot;name&quot;: &quot;Dido Wilford&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=5&quot;,
&quot;email&quot;: &quot;dwilford4@jugem.jp&quot;
},
{
&quot;value&quot;: 6,
&quot;name&quot;: &quot;Celesta Orwin&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=6&quot;,
&quot;email&quot;: &quot;corwin5@meetup.com&quot;
},
{
&quot;value&quot;: 7,
&quot;name&quot;: &quot;Sally Main&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=7&quot;,
&quot;email&quot;: &quot;smain6@techcrunch.com&quot;
},
{
&quot;value&quot;: 8,
&quot;name&quot;: &quot;Grethel Haysman&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=8&quot;,
&quot;email&quot;: &quot;ghaysman7@mashable.com&quot;
},
{
&quot;value&quot;: 9,
&quot;name&quot;: &quot;Marvin Mandrake&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=9&quot;,
&quot;email&quot;: &quot;mmandrake8@sourceforge.net&quot;
},
{
&quot;value&quot;: 10,
&quot;name&quot;: &quot;Corrie Tidey&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=10&quot;,
&quot;email&quot;: &quot;ctidey9@youtube.com&quot;
},
{
&quot;value&quot;: 11,
&quot;name&quot;: &quot;foo&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=11&quot;,
&quot;email&quot;: &quot;foo@bar.com&quot;
},
{
&quot;value&quot;: 12,
&quot;name&quot;: &quot;foo&quot;,
&quot;avatar&quot;: &quot;https://i.pravatar.cc/80?img=12&quot;,
&quot;email&quot;: &quot;foo.aaa@foo.com&quot;
},
]
})

usrList.on('dropdown:show dropdown:updated', onDropdownShow)
usrList.on('dropdown:select', onSelectSuggestion)

var addAllSuggestionsElm;

function onDropdownShow(e){
var dropdownContentElm = e.detail.tagify.DOM.dropdown.content;

if( usrList.suggestedListItems.length &gt; 1 ){
addAllSuggestionsElm = getAddAllSuggestionsElm();

// insert &quot;addAllSuggestionsElm&quot; as the first element in the suggestions list
dropdownContentElm.insertBefore(addAllSuggestionsElm, dropdownContentElm.firstChild)
}
}

function onSelectSuggestion(e){
if( e.detail.elm == addAllSuggestionsElm )
usrList.dropdown.selectAll();
}

// create a &quot;add all&quot; custom suggestion element every time the dropdown changes
function getAddAllSuggestionsElm(){
// suggestions items should be based on &quot;dropdownItem&quot; template
return usrList.parseTemplate('dropdownItem', [{
class: &quot;addAll&quot;,
name: &quot;Add all&quot;,
email: usrList.whitelist.reduce(function(remainingSuggestions, item){
return usrList.isTagDuplicate(item.value) ? remainingSuggestions : remainingSuggestions + 1
}, 0) + &quot; Members&quot;
}]
)
}
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="SingleValueSelect" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Single Value Select</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <input name='tags-select-mode' class='selectMode' placeholder="Please select" />

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>HTML</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
&lt;input name='tags-select-mode' class='selectMode' placeholder=&quot;Please select&quot; /&gt;
</pre>
                        </div>
                    </div>

                    <div class="code-section-container">
                                
                        <button class="btn toggle-code-snippet"><span>JS</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down toggle-code-icon"><polyline points="6 9 12 15 18 9"></polyline></svg></button>

                        <div class="code-section text-left">
                            <pre>
/**
* 
*  Single Value Select
* 
*/

var input = document.querySelector('input[name=tags-select-mode]'),
tagify = new Tagify(input, {
enforceWhitelist: true,
mode : &quot;select&quot;,
whitelist: [&quot;first option&quot;, &quot;second option&quot;, &quot;third option&quot;],
blacklist: ['foo', 'bar'],
})

// bind events
tagify.on('add', onAddTag)
tagify.DOM.input.addEventListener('focus', onSelectFocus)

function onAddTag(e){
console.log(e.detail)
}

function onSelectFocus(e){
console.log(e)
}
</pre>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <x-slot:footerFiles>
        <script src="{{asset('plugins/tagify/tagify.min.js')}}"></script>
        <script src="{{asset('plugins/tagify/custom-tagify.js')}}"></script>
    </x-slot>
    <!--  END CUSTOM SCRIPTS FILE  -->
</x-base-layout>