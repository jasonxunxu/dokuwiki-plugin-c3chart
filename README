# c3chart Plugin for DokuWiki #

The `c3chart` plugin for DokuWiki makes it easy to insert interactive data charts rendered by [C3.js](http://c3js.org/), which is powered by the popular [D3.js library](http://d3js.org/).

This plugin accepts the same JavaScript object that C3 takes to generate a chart. Any chart describable by a static JavaScript object is supported. All types of charts natively supported by C3 can be rendered, such as line/bar/pie/donut charts, as well as scatter plots.

Here are a few screenshots of the rendered charts:

![Line chart](http://i.imgur.com/gZtX5eo.png)

![Stacked bar chart](http://i.imgur.com/MvNROm7.png)

![Pie chart](http://i.imgur.com/Fax0X0S.png)

For more examples, check the [C3 Examples](http://c3js.org/examples.html).


## Installation ##
The latest ZIP package of this plugin can be downloaded [here](https://github.com/jasonxunxu/dokuwiki-plugin-c3chart/archive/master.zip).

If you install this plugin manually, make sure it is installed in `lib/plugins/c3chart/` - if the folder is called different it may not work.

Please refer to the [DokuWiki document](http://www.dokuwiki.org/plugins) for additional info on how to install plugins in DokuWiki.

## Usage ##
This plugin accepts the same JavaScript object that the `generate()` function of C3.js takes to render a chart. To include a chart in your DokuWiki page, simply wrap such a JavaScript object with a `<c3>` tag.

To render the pie chart shown above:
```
<c3>
{
  data: {
    columns: [
      ['data1', 30],
      ['data2', 120],
    ],
    type : 'pie',
  }
}
</c3>
```

The outermost braces can be omitted, so this is also valid (and recommended):
```
<c3>
  // some comment
  data: {
    columns: [
      ['data1', 30], /* more comment */
      ['data2', 120],
    ],
    type : 'pie',
  }
</c3>
```
Also note that you can include comments in the snippet, both styles (`//` and `/* */`) are supported.

The major restriction is that the JavaScript object must be **static**, i.e. it cannot include function calls or function expressions, for security reasons.

## Options ##
The `<c3>` tag can carry optional attributes to customize the appearance of the chart. The attributes are separated by spaces, each specified in the format of `name=value`. Valid attributes are:

| Name     | Description |
|:--------:|:----------- |
| `width`  | Width of the chart, specified in CSS format, e.g. 50% or 320px. |
| `height` | Height of the chart, in the same format as `width`. |
| `align`  | Chart alignment, can be `left`, `right` or `center`. |

For instance to make your chart occupying half width of its container and floated to the right:
```
<c3 width=50% align=right>
  data: {
    ...
  }
</c3>
```

## Configuration ##
The plugin can be configured in the DokuWiki Configuration Manager, with following variables:

| Name     | Description |
|:--------:|:----------- |
| `url_*`  | URL of the dependent libraries. A relative path means that the URL is relative to the `assets` directory of the installed plugin. |
| `width`  | Default width of charts. |
| `height` | Default height of charts. |
| `align`  | Default alignment of charts. |


## License ##
Copyright (C) Jason Xun Xu <dev (a) jasonxu (.) net>

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; version 2 of the License

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

See the COPYING file in your DokuWiki folder for details.

