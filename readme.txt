=== Unofficial - Frill.co SSO ===
Contributors: zarex, afknet, jessetuttle, reesebess, fullstackpress, fullstackology
Tags: frill.co, frill, feedback, roadmap, changelog
Requires at least: 5.7
Tested up to: 5.8.1
Requires PHP: 7.2
Stable tag: 1.0.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Unofficial Frill.co SSO plugin, enable SSO (Single-sign-on) login from WordPress to [Frill](https://frill.co/ "Frill.co")

== Description ==

This Unofficial Frill.co SSO plugin enables WordPress sites to hook into the Frill system and use their existing WordPress users as the base for SSO, Single-sign-on!

So how does this work? Simple:
#1 get a [Frill](https://frill.co/ "Frill.co") account, yes there is a free option
#2 Install this plugin
#3 Insert your key provided by Frill, and your Frill URL.

When a user clicks your Frill link, maybe called "Feedback" they are directed over to the Frill system, with JWT data passed in. Their user account is created and they are all logged in, within the blink of an eye!

**Frill.co - A Standalone Portal SaaS**

Get valuable feedback, a stunning roadmap, and announcements, all wrapped up in one tool with this Standalone Portal SaaS (Software as a Service).
- Capture ideas from your users and allow them to vote and comment on the ones they like best
- Share your plans and progress with users with a beautiful roadmap
- Keep users informed as you ship new features with announcements

Frill has 3 major parts:
- Feedback. A simple way to collect ideas from your users.
- Roadmap. How you communicate progress.
- Announcements. a lightweight, beautiful changelog widget.

👉 USE CASES
Frill has been exceptionally popular in 4 main areas:
- Product owners
- SaaS businesses
- Digital and Product agencies
- Budding entrepreneurs

We even have companies using Frill to collect HR feedback from their employees.

Frill can be used by anyone looking to collect feedback from their usersthat everyone?!

👉 WHY FRILL?
- The overall UX and design - Frill is minimalist and super simple to use.
- The mobile experience - We’d love you to compare us to the current tools.
- Inline admin - Administering your board is done on the same view as your customer view
- Idea Collision detection
- Merge Ideas
- Privacy controls
- Single Sign-On
- Standalone Portal
- Your beautiful Roadmap
- Unlimited tracked users.
- Unlimited teammates.
- As WordPress Plugin that provides a smooth experience even on shared hosting!

👉 IMPORTANT LINKS
- Community Group. https://www.facebook.com/groups/180279940621320
- Public Roadmap. https://feedback.frill.co/roadmap

== Installation ==

1. Upload `Frill-sso plugin` to the `/wp-content/plugins/` directory or install thru WordPress plugin installer.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to your Frill.co site, access your settings from the top right user icon. Go to "Single Sign-On" and input your redirect URL. This is the URL for your site, like `https://example.com`
4. From the same location copy your SSO Key, this is used to Authenticate your users. The format will be `xxxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx`
5. Go to WordPress Admin dashboard -> Settings -> Frill SSO site and input your Frill.co credentials.
6. Add a custom link to any menu or button on your site with `?frill_sso_redirect` set as the link.
7. You should be ready to go! If you have any problems, connect with the Frill Community Group on Facebook at https://www.facebook.com/groups/180279940621320

== Frequently Asked Questions ==

**Do I need an account on Frill.co? Can this be self hosted?**

You do need an account on Frill.co because this is a Standalone Portal SaaS (Software as a Service) product and can not be self hosted.

**Does a user need an account on my WordPress site?**

Yes, because Frill requires that a user's email, display name and ID are sent over to be able to create an token and login the user thru SSO (Single-sign-on)

**What data is shared from WordPress to Frill about my WordPress Users?**

The ONLY data shared from WordPress to [Frill](https://frill.co/ "Frill.co") with this plugin is:
- User ID. This is the user's ID within the WordPress database. Example: 3, if they are user #3.
- User Display Name. This is the name set on their user profile as display name.
- User Email. This is shared so they can get updates from their posted feedback or other feedback points they are following.

**JWT (JSON Web Token)**

JWT is JSON Web Token, and is an authentication protocol used in many web services. We have built this plugin so that it will work even on shared hosting providers that do not have /Firebase/php-jwt installed!

**Why do I need to add ?frill_sso_redirect to a custom link?**

That will trigger a function that creates the user's SSO token and redirect the user to your Frill.co page if the user is logged in.

If the user is not logged in then it will redirect the user to WordPress login page. And after login it will redirect the user to Frill.co

**Pro Version, to be announced**

To support continued development of this plugin into the future with new features, we will be working on a Pro version of this plugin. When the proversion becomes available, nothing will be taken away from this plugin. The SSO function is core to the product and will always be available for free!

== Screenshots ==

1. Idea Board
2. Road Map
3. Frill Administration

== Change log ==
= 1.0.3 2021-10-06 =
* Fix problem on installation when there is no user input in the settings fields
* Updated readme file
* Check support for WordPress 5.8.1
* New Future, added support for custom login page

= 1.0.2 2021-08-02 =
* Fix mismatch stable version number between readme file and plugin file
* Change from text input to password input on Frill SSO key input field in settings
* Escaped user input values, and request parameters
* Checked support for WordPress 5.8

= 1.0.1 2021-07-09 =
* Fix on typo in readme file, installation step 3.
* Change plugin name from Frill SSO Unofficial to Unofficial Frill SSO

= 1.0.0 2021-07-03 =
* Initial Public Beta Release

== Upgrade Notice ==
