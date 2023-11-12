# Documentation
## Assessment Tasks List
- Please setup a Blank WordPress project
- Do initial commit of blank project on a GitHub repository (Just push wp-content/plugins and wp-content/themes Folders
- Write a function that will redirect the user away from the site if their IP address starts with 77.29. Use WordPress native hooks and APIs to handle this.
- Register post type called "Projects" and a taxonomy "Project Type" for this post type.
- Create a WordPress archive page that displays six Projects per page with pagination. Simple pagination is enough (with next, prev buttons)
- Create an Ajax endpoint that will output the last three published "Projects" that belong in the "Project Type" called "Architecture" If the user is not logged in. If the user is logged In it should return the last six published "Projects" in the project type call. "Architecture". Results should be returned in the following JSON format {success: true, data: [{object}, {object}, {object}, {object}, {object}]}. The object should contain three properties (id, title, link).
 - Use the WordPress HTTP API to create a function called hs_give_me_coffee() that will return a direct link to a cup of coffee. for us using the Random Coffee API [JSON].
- Use this API https://api.kanye.rest/ and show 5 quotes on a page.

## Tasks Competed

- Blank WP set up and wp-content/themes & wp-content/plugins pushed to given Github repository.
- WP redirection implemented based on required IP.
- Registered Custom Post Type 'Projects' with Taxonomy 'Project Type'
- Archive Page for Projects with 6 Posts per Page created.
- An ajax endpoint has been created to fetch Projects with Taxonomy 'Architecture' fetching JSON data in required format. (A javascript code added to theme footer.php for testing.)
- Random Coffee API (JSON) is integrated using WP HTTP API and required function created. For testing a shortcode has been generated to fetch the image from API i-e `[cdmt_coffee]`
- Quotes API has been integrated and a shortcode `[cdmt_quotes]` has been generated to display 5 quotes on page.

