# IDM232 Alpha

This page describes an assignment for this course. Due dates and submissions are handled through [Drexel Blackboard](https://learn.dcollege.net/).

## Assignment 01 - Github + Server Setup

## Github

- Video Tutorial [HERE](https://www.youtube.com/watch?v=4BnGWx5HWyI).
- If you have an existing repo, please delete that repo and start fresh.
- Setup a github repository for this class that lives out of `{path-to-project-folder}/public_html`.
- This repo should contain a `final` folder with an `index.php` inside of it.
- Inside this `index.php`, complete the following:
  - Write basic html5 boilerplate code.
  - Create an variable and assign a string of `Assignment - 01` as it's value.
  - Create an `h1` tag within the body element and output that PHP variable in between the tags.
  - Break out the header and footer into it's own php files.
  - Using PHP, include the new header and footer files using the php `include_once`

## Server

- Create a folder on your server called `idm232`. Inside of there, you should copy your github repo into that folder (This would be everything inside your `public_html`folder)
- If you did that correct, you should be able to visit `https://{your-domain-dot-com}/idm232/final`. This should load the index.php work you did above

Here is an example of how your files should look like on your sever. `public_html/idm232/{github-content-here}`
![inline](https://github.com/mrpaulphan/idm232/blob/a6cfdbd9b0ec4e4fe74891f99ad3634db053b618/assets/images/hosting_structure.png)

## Submitting the Assignment

Submit the following items in [Drexel Blackboard](https://learn.dcollege.net/) under **Assignment 01** Submission:

1. A link to your GitHub repository (i.e. "idm232-abc123") containing the code for your project.
2. A link to your example index.php page that displays `Assignment - 01` on the page in an `h1`tag

Example Submission

```
Github Repo: https://githubc.com/mrpaulphan/idm232
Live URL: https://mrpaulphan.com/idm232/final
```

**Please double check your work and make sure all links are working before submitting. Broken links will cause you to lose points. Late submissions receive zero points.**
