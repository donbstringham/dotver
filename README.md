# dotver

**GIT tags used as appliction version numbers**

[![Stories in Ready](https://badge.waffle.io/donbstringham/d3x.png?label=ready&title=Ready)](https://waffle.io/donbstringham/dot-version)
[![Build Status](https://travis-ci.org/donbstringham/dotver.svg)](https://travis-ci.org/donbstringham/dotver)
[![Code Climate](https://codeclimate.com/repos/555e0d596956805bad00a0e4/badges/7b03b962912b882a6a71/gpa.svg)](https://codeclimate.com/repos/555e0d596956805bad00a0e4/feed)

This simple library reads the `git tag` command's output and stores it for use in a .ver file.  This file can then be used as the application's version.  Please follow [Semantic Versioning](http://semver.org/)! 

## Requirements

`git` **must** be installed on the system.  The code should initially be executed in a directory structure that has been `git` initialized. **NOTE**: The methods of this library need to be run, at least, initially in a project directory initialized for use with `git`.

## Install

Add the library to your composer file:

```
{
	"require": {
		"donbstringham/dotver": "^0.1.*"
	}
}
```

or use composer's require command

```
composer require donbstringham/dotver:^0.1.*
```
    
Use the library in your PHP application

```
<?php
use Common\Utils\DotVersion;

// Instantiate the class
$dotVersion = new DotVersion();

// Reads version number from the '.version' file
$version = $dotVersion->getVersion();
```
     
## Usage

- Instantiate the only class in the library:

	``` $dotVersion = new DotVersion(); ```

- Use the version number in the `.version` file.

	``` $dotVersion->getVersion(); ```
	
---
	
Don B. Stringham "donbstringham" © 2015
