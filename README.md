Bootstrap Shortcodes for WordPress
===

This is a plugin for WordPress that adds shortcodes for easier use of the Bootstrap elements in your content.

## Requirements
This plugin won't do anything if you don't have website built with the [Twitter Bootstrap framework](http://getbootstrap.com/). **The plugin does not include the Bootstrap framework**.

The plugin is tested to work with ```Bootstrap version 3.0.0``` and ```WordPress 3.6```.

## Installation
To install this plugin, just download it, and drop the folder in the ```wp-content/plugins/```. Then login to WordPress and activate the plugin.

## Supported shortcodes
The plugin doesn't support all Bootstrap elements yet, but most of them.

* [Grid](#grid)
* [Buttons](#button)
* [Alerts](#alert)
* [Code](#code)
* [Labels](#label)
* [Badges](#badge)
* [Icons](#icon)
* [Tables](#table)
* [Accordion](#accordion)
* [Tabs](#tab)
* [Wells](#well)

## Usage

You use the shortcodes just like you would with any other shortcode, with the exception of tables, accordion and the tabs.


#### <a id="button"></a>Buttons
	[button type="success" size="lg" link="#"] … [/button]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
type | The type of the button | optional | default, primary, success, info, warning, danger, link | default
size | The size of the button | optional | xs, sm, lg | none
xclass | Any extra classes you want to add | optional | Any text | none

#### <a id="alert"></a>Alerts
	[alert type="success"] … [/alert]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
type | The type of the alert | required | success, info, warning, danger | success
dismissable | If the alert should be dismissable | optional | true, false | false
strong | Text to display in bold at the beginning | optional | Any text | false

#### <a id="code"></a>Code
	[code] … [/code]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
inline | display inline code | optional | true, false | false
scrollable | set a max height of 350px and provide a scroll bar. Not usable with inline="true".  | optional | true, false | false

#### <a id="label"></a>Labels
	[label type="success"] … [/label]

#### <a id="badge"></a>Badges
	[badge type="success"] … [/badge]

#### <a id="well"></a>Wells
	[well] … [/well]

#### <a id="icon"></a>Icons
	[icon type="arrow"]
	[icon_white type="arrow"]

#### <a id="grid"></a>Grid
	[row]
	  [column medium="6"]
	    …
	  [/column]
	  [column medium="6"]
	    …
	  [/column]
	[/row]

Parameter | Description | Required | Values | Default
--- | --- | --- | --- | ---
xs | size of column on extra small screens (<768px) | optional | 1-12 | false
sm | size of column on small screens (≥768px) | optional | 1-12 | false
md | size of column on medium screens (≥992px) | optional | 1-12 | false
lg | size of column on large screens (≥1200px) | optional | 1-12 | false


#### <a id="table"></a>Tables
	[table type="striped" cols="#,First Name, Last Name, Username" data="1, Filip, Stefansson, filipstefansson, 2, Victor, Meyer, Pudge, 3, Måns, Ketola-Backe, mossboll"]

#### <a id="accordion"></a>Accordion
	[collapsibles]
	  [collapse title="Collapse 1" state="active"]
	    …
	  [/collapse]
	  [collapse title="Copllapse 2"]
	    …
	  [/collapse]
	  [collapse title="Copllapse 3"]
	    …
	  [/collapse]
	[/collapsibles]

#### <a id="tab"></a>Tabs
	[tabs]
	  [tab title="Home"]
	    …
	  [/tab]
	  [tab title="Profile"]
	    …
	  [/tab]
	  [tab title="Messages"]
	    …
	  [/tab]
	[/tabs]
