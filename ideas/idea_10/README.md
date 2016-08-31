# Use a color to make phishing hard

When a user registers to your website you let him choose a color from a set of 10/12. The color will be used to personalize the html (i.e. as a background color) of ALL the email he will receive from your website. This way, he will be able to recognize the legit emails and discard the phishing ones.

### PROs

* Easy for devs: it's just another user field to be implemented
* Easy for users: you have your color. Any other color is a fake email
* Once chosen it will stick to the user and can't (shouldn't) be modified. It will be hard to guess even for the website owner if encrypted
* Hard for spammers. They have to multiply by `x` (where `x` is the number of colors available) the emails sent. If you change colors over time it will get even harder.
* A new idea? I've never seen it around...

### CONs

* Hard to monetize? Maybe with a patent? What about opensource clones if it gets traction?
* How about colorblind/blind people?
* It should be implemented carefully
* What if users can't understand the mechanism? Or forget their color if it's not possible to change or recover it?
* What if there's an existing patent on it?

### Notice

Check https://github.com/napolux/1000ideas for license and FAQ
