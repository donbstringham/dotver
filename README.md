# dotver

**GIT tags used as application version numbers**

[![Stories in Ready](https://badge.waffle.io/donbstringham/dotver.svg?label=ready&title=Ready)](http://waffle.io/donbstringham/dotver)
[![Build Status](https://travis-ci.org/donbstringham/dotver.svg)](https://travis-ci.org/donbstringham/dotver)
[![Code Climate](https://codeclimate.com/repos/555f6342e30ba04f7c006ce7/badges/1f82d19b99ce8820cfb7/gpa.svg)](https://codeclimate.com/repos/555f6342e30ba04f7c006ce7/feed)
[![Test Coverage](https://codeclimate.com/repos/555f6342e30ba04f7c006ce7/badges/1f82d19b99ce8820cfb7/coverage.svg)](https://codeclimate.com/repos/555f6342e30ba04f7c006ce7/coverage)

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
use Donbstringham\Version\Domain\Factory\VersionFactory;
use Donbstringham\Version\Domain\Service\VersionService;

// Instantiate the service class
$service = new VersionService(new VersionFactory());

// Returns version object based on the '.ver' file
$version = $service->getVersion();

// To get a version string
$versionString = $version->getVersion();
```
     
## Usage

- Use the version number in the `.ver` file.

	``` $version->getVersion(); ```
	
---
	
Don B. Stringham "donbstringham" © 2015
