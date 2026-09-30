# cs333-lab1
Do each step below, and **answer the questions right here in this `README.md` file** as you go (type your answers under each question).

**How this lab works (two things to hand in):**
- **Your code:** make your own copy of this lab (click **Use this template**, or clone it),
  do your work, and **push it to your own GitHub repo** so I can see your code.
- **Your live form:** **SFTP the form pages to your web folder on `lampforall`** so the form
  actually runs on the LAMP stack.

You'll submit links to both in Moodle (see the last step).

1. Do you have your simple apache website already set up?

Yes, I already have my simple Apache website set up and running on `lampforall`.

2. What is your URL? Provide it here — and practice writing it as a proper **Markdown link** in this file, e.g. `[my site](https://lampforall.cis251296.projects.jetstream-cloud.org/students/yourname)`, not just pasted plain text. (Good Markdown practice for your README.)

[my site](https://lampforall.cis251296.projects.jetstream-cloud.org/students/seabass/AboutMe/)

3. As always, you can do the minimum, or you can go further than the assignment and embellish your work- highly encouraged.

I plan to complete all of the required parts of the assignment and also keep the pages organized and easy to navigate.

4. Put these two html files included in this lab1 repo in your local site. View them with live preview, and make sure they are visible locally.

I placed the two HTML files from the lab1 repo into my local website folder and tested them using VS Code Live Preview. Both pages displayed correctly locally.

5. Link these two files to your index.html page, both ways so I can go to all pages from each page via hyperlinks.

I added hyperlinks between my `index.html`, `form.html`, and the submission page so that I can navigate between each page without manually changing the URL.

6. Test all of this locally.

I tested the pages locally and confirmed that the HTML pages loaded correctly and the navigation links worked.

7. However you have your SFTP set up, upload the pages to your site, and fill out information in the forms.html and hit submit

I uploaded the pages to my `lampforall` web folder using SFTP. I then opened `form.html`, entered information into the form, and clicked submit.

8. Do you see results in the submit.html file? Why or why not? Do you see results in the URL bar? Why does this happen?

No, the submitted form information does not automatically appear inside `submit.html`. A normal HTML page is static and does not have server-side code that can read the submitted values and display them.

I do see the submitted values in the URL bar when the form uses the `GET` method. This happens because GET sends the form information as query parameters in the URL.

9. Describe in a few sentences how the html form works.

An HTML form contains input fields that allow a user to enter information. Each input has a `name` attribute that identifies the value being submitted. When the user clicks the submit button, the browser sends the form information to the page listed in the form's `action` attribute. The form's `method` determines how the information is sent.

10. What do GET and POST mean in this context?

GET and POST are two methods used to send form data to a server.

GET places the submitted data in the URL as query parameters, which means the information is visible in the browser's address bar.

POST sends the submitted information inside the HTTP request instead of displaying it in the URL. POST is commonly used when sending larger amounts of data or information that should not appear directly in the URL.

11. What would we need to do to make the submit.html page display what was filled out in the form?

We would need server-side code that can read the submitted form values and display them in the returned page. Since the `lampforall` server supports PHP, we can rename `submit.html` to `submit.php` and use PHP to read and display the submitted form information.

12. Add code to make the submit page display the form information, then upload it and check that it works.
    HINT: our server runs **PHP**, so make the page a PHP page:
    - Rename `submit.html` to `submit.php`, and point the form's `action` at `submit.php`.
    - In `submit.php`, read the submitted values with PHP — e.g. `$_GET['name']` (or
      `$_POST['name']` if you switch the form's method to POST) — and echo them into the page.
    - Wrap each value in `htmlspecialchars(...)` before you echo it, so no one can inject
      HTML or script through the form. Why does that matter?
    - NOTE: PHP only runs on the **server** — VS Code Live Server / local preview will NOT
      execute it (you'll just see nothing or raw code). Test your `.php` by uploading it and
      opening the page at your `.../students/yourname/` URL.

I renamed `submit.html` to `submit.php` and changed the form action to point to `submit.php`. I used PHP to read the `name`, `email`, and `message` values submitted with GET and displayed them on the page.

I also wrapped the submitted values in `htmlspecialchars(...)`. To test this, I entered `<b>Hello</b>` into the message field. The results page displayed `<b>Hello</b>` as plain text instead of making the word bold. This matters because it prevents submitted HTML or JavaScript from being executed in the browser, which helps protect against XSS attacks.

I uploaded the PHP file to `lampforall` and tested it there because PHP does not execute through VS Code Live Server.

13. Describe what a static HTML site is, the limitations of this type of site

A static HTML site is a website made from files that are sent to the browser mostly exactly as they are stored on the server. The content does not automatically change based on user input or information stored on the server.

One limitation of a static HTML site is that it cannot permanently store submitted form information by itself. It also cannot handle things such as user accounts, saved form submissions, or database information without using server-side code or another backend service.

14. What kind of non-static site would we need to be able to store the form information? Give an example of a configuration that will enable a form to accept data and store it persistently.

We would need a dynamic website that uses server-side programming and persistent storage such as a database.

One example would be a LAMP configuration using Linux, Apache, MySQL or MariaDB, and PHP. The HTML form could send the submitted information to a PHP page, and PHP could validate the data and save it into a MySQL or MariaDB database. This would allow the information to remain stored even after the user closes the browser.

15. Push this repo — the lab **files** and this **README.md** (with your answers filled in) — to **your own GitHub repo**.

I pushed the completed lab files and this `README.md` to my own GitHub repository.

GitHub repository:

[Add GitHub repository link here]

16. Submit in Moodle two links: (1) your GitHub repo, and (2) your live site showing the working form. Labs are submitted in Moodle every week — that is how I receive your work.

GitHub repository:

[my github repo](https://github.com/SebasEcehverria/cs333-lab1)

Live site:

[my live site](https://lampforall.cis251296.projects.jetstream-cloud.org/students/seabass/AboutMe/)

[Live Form](https://lampforall.cis251296.projects.jetstream-cloud.org/students/seabass/AboutMe/form.html)