# 1000 ideas, free for everyone

[![Build Status](https://travis-ci.org/napolux/1000ideas.svg?branch=master)](https://travis-ci.org/napolux/1000ideas)

I was always thrilled by "idea generation mechanism" and how a business like Facebook or Uber or Apple can born from "the brain" of someone... A while ago [I've read about the Idea machine from James Altucher](http://www.jamesaltucher.com/2014/05/the-ultimate-guide-for-becoming-an-idea-machine/)
and as a programmer I've decided to give to my idea machine a little structure and a way to ensure some sort of quality to my ideas.

This repo serves as container for my ideas.

My ultimate goal is to reach **one thousand (1000, 1k, whatever) ideas**.

### A list of all ideas:

<!--- IDEALIST_START -->

* [The idea number 0, the prototype for all other ideas](ideas/idea_0/README.md)
* [We make your bed service](ideas/idea_1/README.md)
* [Use a color to make phishing hard](ideas/idea_10/README.md)
* [The barber review](ideas/idea_11/README.md)
* [Tourist guide on demand for travel tips](ideas/idea_2/README.md)
* [A Wikipedia for WW2 testimonials](ideas/idea_3/README.md)
* [Your vegetables garden app](ideas/idea_4/README.md)
* [Vegan food/restaurants/lifestyle review](ideas/idea_5/README.md)
* [Follow me luggage](ideas/idea_6/README.md)
* [CV Bot](ideas/idea_7/README.md)
* [IKEA personal shopper](ideas/idea_8/README.md)
* [Play videogames meetup platform](ideas/idea_9/README.md)

We currently list **11** ideas, since I'm not taking into consideration `idea_0`.

<!--- IDEALIST_END -->

## FAQ

### Who are you?
I'm an italian programmer. You can find some more about me @ [https://napolux.com](https://napolux.com)

### Are these ideas really free?
YES. The MIT license is pretty clear.

### What if I realize one of your ideas and I make millions? Will you sue me?

[Ideas are worthless, execution is everything](http://adil.io/entrepreneurship/ideas-are-worthless-execution-is-everything/), so, I don't care. But if you want to give me some of your millions, [click here](https://www.paypal.me/napolux/) :D

### How long will it take to reach 1000 ideas?

If I stick to James' idea machine article I should end my journey in 100 days. I will not limit myself to a simple writedown, so it could take longer.

### Tell me more about the "little structure" and the "quality" of your ideas

Ideas will be rendered as a `.json` and a `README.md` file. The markdown file will be the "human readable" version of the idea, while the json file will be validated using some PHPUnit tests and a CI system in order to:

* Have a "title" of less than 15 words
* Have a "description" of at least than 30 words
* Have a list of five (5) pros and (5) cons
* A notice about this project

(structure may change at my will, it's not set in stone)

To run tests you need:

* PHP 5.5.x
* [Composer](https://getcomposer.org/download/) & [PHPUnit](http://phpunit.de)
* [Install PHPUnit](http://phpunit.de/manual/current/en/installation.html) if you didn't before.

### Are your ideas 100% originals?

**I can't guarantee they are 100% originals**, the world is full of ideas machines. I can only guarantee that the idea comes from my mind. :)

### Can you elaborate on this?

**Let's make an example**: let's say I'm thinking about **a dating site for fat people like me**. There are already many websites out there offering this kind of services, but probably I'm thinking about it for a while and **I've figure out a way for a viral marketing initiative like printing coupons for the service on pizza boxes**...

Then I'll write it down as an idea.

Not original, not new, but it's an idea. And it's mine. And I'm giving it away for free.

### Can I add some ideas with a pull request?

Nope, sorry. But you can fork my repo and do whatever you want with it. If you have any suggestion, get in touch or **open an issue**.

### What is `idea_0`?

It's a prototype for all the other ideas. I'm using it to validate my build and test scripts.

### I have another question. How can I reach you?

[Check my website](https://napolux.com) or write me [napolux@gmail.com](mailto:napolux@gmail.com).