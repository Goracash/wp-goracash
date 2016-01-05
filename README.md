# Goracash

Contributors: davaxi
Tags: goracash, adserver, banner, lead, teach, construction, iframe
Requires at least: 3.0.1
Donate link:
Tested up to: 3.4
Stable tag: 0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Goracash, part of Wengo - Vivendi Group, is an affiliate program that allows you to monetize your traffic and earn money with it.

## Description

Goracash, part of Wengo - Vivendi Group, is an affiliate program that allows you to monetize your traffic and earn money with it.

The market of the expert assistance is experiencing an exponential growth on the Internet. Many web visitors are looking for experts in various industries such as astrologers, psychic readers, teachers or workers...Monetize your audience now with a trustworthy sponsor.

Founded by successful web entrepreneurs, Goracash has over 10 years of know-how in the affiliate marketing business, known as leader in the business of connecting the clients to the experts.

This plugin gives you access to our various promotion tools, such as:
-	Our banners multi -thematic / multi- language / multi- market
-	Our iframes to catch Psychic Readings / Teaching / Quotes and Law lead
-	Our Top Bar with a common phone number

You can also manage entirely the settings of our promotion tools to track the conversion.

This plugin allows you to check the stats of each of our promotion tools inserted on your website.

If you have any further questions, do not hesitate to contact directly our Affiliate Manager.

Use of the plugin (no limits): to use this plugin, please create a free account on Goracash.com here :

Once you have created an account on Goracash.com, we will provide you with a unique ID of 4 digits that will be required on the administration interface of the plugin.

You can add our banners via the Widgets interface (Goracash Banner) or via the shortcode [goracash_banner]

You can add the iframe via the Widgets interface (Goracash Iframe) or via the shortcode [goracash_iframe]

## Installation

This section describes how to install the plugin and get it working.

1. Upload `wp-goracash` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

### Shortcode

#### [goracash_banner]

Setting up a dynamic banner

| Parameter       | Description                                                                   | Required | Values                                   | Default               |
| --------------- | ----------------------------------------------------------------------------- | -------- | ---------------------------------------- | --------------------- | 
| title           | Title of block                                                                | optional | any text                                 | none                  |
| thematic        | Thematic of banner                                                            | optional | ASTRO, PSYCHO, TEACH, DEVIS, SPONSORSHIP | Specified in settings |
| advertiser      | Advertiser of banner                                                          | optional | any listed values in settings            | Specified in settings |
| tracker         | Your tracker                                                                  | optional | any text                                 | none                  |
| defaultLanguage | This language will be used in case we do not dected the language of the user. | optional | fr_FR, es_ES                             | Specified in settings |
| defaultMarket   | This market will be used in case we did not detect the location of the user.  | optional | france, spain                            | Specified in settings |
| minWidth        | Minimum width (in px)                                                         | optional | integer                                  | none                  |
| maxWidth        | Maximum width (in px)                                                         | optional | integer                                  | none                  |
| minHeight       | Minimum height (in px)                                                        | optional | integer                                  | none                  |
| maxHeight       | Maximum height (in px)                                                        | optional | integer                                  | none                  |

#### [goracash_iframe]

Lead capture form

| Parameter | Description    | Required | Values                                             | Default |
| --------- | -------------- | -------- | -------------------------------------------------- | ------- |
| title     | Title of block | optional | any text                                           | none    |
| type      | Type of iframe | required | astro, academic, estimation, juridical, voslitiges | none    |
| tracker   | Your tracker   | optional | any text                                           | none    |

## Frequently Asked Questions

### How can I get my Goracash ID ?

Your ID Goracash of 4 digits is displayed on the top right of your interface screen

### Why do I need to create an API key ?

Your customer ID / client_secret allows you to log in our in the interface without typing your ID and password for the security matter. It allows you to get your statistics on your Wordpress interface.

### Where to find my client_id / client_secret ?

Log on your affiliate interface, click on your account on the top right and go to the “API and Authentication” tab.

### Why can’t I see the stats of the banners ?

Coming soon. We are currently developing this interface in order to give the entire follow up of our promotion tools stats. You will be notified by email once the plugin is updated.

If you have any further questions, do not hesitate to contact directly our Affiliate Manager.

## Changelog

### 0.7

* Fix invalid links
* Add advertiser option for banners
* Add VosLitiges iframe

### 0.6

* Add italian and portuguese languages

### 0.5

* Add banners and icons for Wordpress

### 0.4

* Fix missing dependencies in SVN repository

### 0.3

* Add compatibilities for submodule & composer

### 0.2

* Check API credentials
* Use languages translations for english and french version

### 0.1

* Create first version of plugin with Goracash Tools (Banners / Iframes / Top Bar / Pop Exit)
