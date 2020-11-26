The Moodle Toolguide and Selector v3
====================================

Copyright Richard Oelmann @richards_EdTech 2020
Credits Joyce Seitzinger (@catspyjamasnz), Gavin Henrick (@ghenrick) and Alison Ruth

It also builds on the previous release (2015) by Richard Oelmann for both the Moodle community and University of South Wales.
This reworking has been part of a Catalyst 'Catathon' project @Catalyst_IT_EU, November 2020.

As with the original works, it is released under a Creative Commons, Non-Commercial, With Attribution, Share-Alike licence
https://creativecommons.org/licenses/

Please feel free to contribute suggestions and improvements to https://github.come/roelmann/moodletoolguide3 or fork it
and build your own variation - don't forget to release any improvements and developments back to the community.

Features:
---------
ToolGuide
    This is directly based on the original ToolGuide, produced by Joyce Setizinger and Gavin Henrick's subsequent work for
    Moodle2. It has been updated for Moodle 3 and includes filters to allow additional plugins (and Catalyst's own out-of-
    the-box additions) to be highlighted or excluded.
    As with the original, you can look across the columns to what you want to achieve and down the rows to find the tools.
    The grid then gives you a summary of the tool, while clicking on the tool title will take you to a page where more
    detail can be added (eg. previous iterations for USW included links to University help pages).
    Although colour based for visual impact, each tile has a corresponding icon so that colour is not the only factor in
    identifying the options.

    The grid is now built from an xml text file and so is much easier to update and add your own plugin set to than
    previous versions which needed to be built directly in the code.

Tool Selector
    Based on original work and concepts by Alison Ruth and developed from my Moodle2 version.
    As with the ToolGuide, this is also backed by an xml data file, though the structure also requires some javascript
    fiddling if it is being edited.
    The Tool Selector enables the tutor to step through what they are trying to achieve, to provide suggestions of suitable
    tools. The Selector also provides an image of the decision tree backing the selector's branching format and also the
    draw.io file used to create the image so that this too can be edited as required.
    (draw.io is a free web service for creating diagrams)

Theming/Skinning
    The site is built on Boostrap 4 and includes the full range of available Bootswatch templates for BS4. These are
    selectable from the drop down menu.
    Buttons are also provided to switch from coloured tile backgrounds to outlines only, and also between dark and light
    text, acknowledging that not all bootswatches are suitable for the default set up. Unfortunately, while the theme
    choice is persistent across the pages, the outline/text options are not (yet).
    This is also intended to aid accessibility, though further suggestions for improvements around accessibility are
    welcomed.

Responsiveness
    While a large tabular grid layout like the guide, or a branching structure like the selector, does not lend itself
    easily to smaller screens, the site has been made responsive as far as possible.
    To reduce scrolling, the content of each tile has been mode into a pop-up tool-top style content on smaller screens.

Roadmap v3:
-----------
    1. improve accessibility provisions
    2. Add more additional plugins
    3. Backend - improve the JS
    4. Create Moodle resources, including H5P version of branching database

Roadmap v4/aspirational:
------------------------
    1. Accomodate changes in Moodle4.0 UI/UX
    2. Develop resource accomodating full learning design principles eg ABC-VLE/UDL
    3. Develop resource that builds into a Moodle course creation tool based on those learning design principles
