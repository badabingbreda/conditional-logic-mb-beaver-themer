# Conditional Logic for MemberPress with Beaver Themer

In order to show/hide nodes with Beaver Themer using Conditional Logic is far easier than using the shortcodes.

---
## How to use Conditional Logic
- Create a Partial Rule, add the membership(s) or other rules that need to apply in order to display the content. Make sure to change the title to something you'll easily identify as being te rule.
<br>Just remember that, when any of the rules set for the partial applies that you can consider it to return TRUE/IS SET
- Don't forget to remove any of the existing rules that could hide the content/themer layout;
- Open Beaver Builder and go to the node that needs the Conditional Logic. Go to the "Advanced" tab and for the "Visibility > Display" settings select "Conditional Logic". Now select "MemberPress Rule" from underneath the "MemberPress (unofficial)" group.
- If you select "is set" and the partial, this node will be VISIBLE;
- If you select "is not set" and the partial, this node will NOT BE RENDERED (which is not the same as invisible, absolutely nothing will be output to the browser).

---
## Security measure to prevent accidental rendering
To prevent accidental rendering in case a rule gets deleted, it will always hide/return false on the node when that happens. Seemed like the most logical way to go.

---
Version history
|version|date|changes|
|---|---|---|
|1.0.1|feb 28th 2022|Fixed a constant that was used from other plugin file
|1.0.0|feb 28th 2022|First commit, initial release