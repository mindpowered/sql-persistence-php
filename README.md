
persistence
===========

Contents
========

* [Requirements](#requirements)
* [Installation](#installation)
* [Licensing](#licensing)
* [Support](#support)

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get persistence using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/persistence` to the requirements:
```
{
        "require": {
                "mindpowered/persistence" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Licensing
Additional [licensing options][licensing] are available.

# Support
For bug fixes, please raise an issue in the [Issue Tracker][bugs].

For feature requests, and general support, please [Contact us][contact].



[bugs]: https://github.com/mindpowered/sql-persistence-php/issues
[contact]: https://mindpowered.dev/support.html?ref=sql-persistence-php/
[licensing]: https://mindpowered.dev/?ref=sql-persistence-php
