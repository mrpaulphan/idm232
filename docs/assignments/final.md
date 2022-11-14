# IDM232 Final Project

This page describes an assignment for this course. Due dates and submissions are handled through [Drexel Blackboard](https://learn.dcollege.net/).

- [IDM232 Final Project](#idm232-final-project)
  - [Project Description](#project-description)
  - [Project Asset Files](#project-asset-files)
  - [Project Requirements](#project-requirements)
    - [**User Pages**](#user-pages)
    - [**Admin Pages**](#admin-pages)
    - [**Extra Credit**](#extra-credit)
  - [Grading Criteria](#grading-criteria)
  - [Submitting the Assignment](#submitting-the-assignment)
  - [Example Submission](#example-submission)

## Project Description

Students will create a custom web application. The topic will be _an online cookbook_ featuring a library of recipes.

Students will be provided with a library of pre-written recipes in PDF format, as well as a group of images related to each recipe. Each student will create their own branded web application that will display the recipes and provide a user interface for browsing, searching and filtering through all of the available content.

The application must use the following:

- PHP
- MySQL
- HTML
- CSS
- Git

Additional techniques, including, but not limited to the following may be used as needed:

- JavaScript
- CSS pre-processors
- Node.js
- Task runners (Grunt, Gulp, NPM etc.)

## Project Asset Files

[Download asset files](http://cdn.philsinatra.com/idm/IDM232-assets.zip)

## Project Requirements

The following outline lists the requirements for successfully completing the final project.

- [ ] All projects must be programmed from scratch using PHP/MySQL as the primary programming and data manipulation languages. Use of online content management systems (Wordpress, WIX, Squarespace etc.) is completely prohibited.
- [ ] All projects must be self hosted.
- [ ] Source code must be tracked throughout the duration of the project using GitHub.
- [ ] All data must be stored and served from a MySQL database, running on the live web server.
- [ ] Projects must include all of the provided recipes, not a subset. Link [here](https://drive.google.com/drive/folders/1B4o77Gl6lyK6w42cNrLs1UeedZez3v2z?usp=sharing). One image per recipe is required.
- [ ] All sites must be fully responsive, from a range of small to large (smart phone to desktop monitor).
- [ ] Completed [Case study assignment](https://github.com/mrpaulphan/idm232/blob/0def798a1d199036f9266d621881d433c61b2e5d/docs/assignments/case-study.md)

### **User Pages**

- [ ] Home/Landing
- [ ] Recipe listing screen (List all recipes on a page in alphabetical order by title name)
- [ ] Recipe Detail
  - [ ] Has featured Image
- [ ] Search Results

### **Admin Pages**

- [ ] Recipe Listing (List all 40 recipes)
- [ ] Create Recipe
- [ ] Recipe Detail
- [ ] Edit Recipe
- [ ] Delete Recipe

### **Extra Credit**

- Login System (5 points)
  - Login/Logout Pages
  - Create a demo account for me to login with
    - email = `paul.phan@drexel.edu`
    - password = `idm232`
  - An example of content changing if you're logged in
    - Could be layout changes, text changes, permissions, or navigation changes.

## Grading Criteria

Your final project represents the culmination of ten weeks. This project will be graded based on the following criteria:

1. Code Quality
   - Is all of your code valid?
   - Did you follow best practices regarding file names, characters, coding styles?
   - Is your code legible and easy to navigate?
   - Does your code use comments?
2. Functionality
   - Everything needs to work (e.g. links, videos, audio, images, rollovers etc.). If it's part of your site it must be working properly.
3. Design
   - Is your site visually pleasing?
   - Is your content legible with proper contrast, color scheme, typography etc.?
   - Would you feel comfortable using this project in a job interview as an example of your skills?
4. Technique
   - Is the project built in an optimized fashion? Will future maintenance be minimal?
   - Is the database well structured and easy to manipulate?
   - Is the application properly templated, with minimal repetition of code?

## Submitting the Assignment

Submit the following items in [Drexel Blackboard](https://learn.dcollege.net/) under **Final Project**:

This project is worth 50 points.

- Case Study (10 Points)
- Web App (40 Points)

1. A link to your self hosted website project page. From this page, I can fully engage the project and have access to all supplementary pages and functions. List all pages that are required for this assignment.
2. A link to your GitHub repository containing the code for your final project.
   - A copy of your MySQL database must be included in the repository.
3. A link to your [case study](https://github.com/mrpaulphan/idm232/blob/0def798a1d199036f9266d621881d433c61b2e5d/docs/assignments/case-study.md) web page.

**Late submissions receive zero points.**

## Example Submission

All links should be working valid links. This is just example/dummy content

```
Github Repo: https://github.com/mrpaulphan/idm232/tree/master/public_html
Database Export: https://github.com/mrpaulphan/idm232/tree/master/public_html/sql
Case Study: https://github.com/mrpaulphan/idm232/tree/master/public_html/{uri-to-example}

Home Page: {link-to-example}
Category Listing Page: {link-to-example}
Recipe Detail Page: {link-to-example}
Search Results Page: {link-to-example}

Admin Recipe Listing: {link-to-example}
Admin Recipe Create: {link-to-example}
Admin Recipe Detail: {link-to-example}
Admin Recipe Edit: {link-to-example}
Admin Recipe Delete: {link-to-example/directions}

Extra Credit
{insert any extra features you added here}
```
