# Blinds

## About Blinds

Blinds is a Javascript script used to easily add dark mode styles to a website. We believe giving users the option for dark mode is no longer negotiable, and this applies to every type of website, in every niche. Blinds takes the pain out of development by making the process as easy and intuitive as possile. Some of the features include:

- Simple plug and play script, with minimum required tweaks.
- Fast, yet powerful design features that works great for both tech-savvy and ordinary users.
- Ease of customization. You can customize anything, from Icons to stylesheets.

Blinds is accessible, intuitive, and provides easy way to make a dark mode version for your website's user interface.

## Quick installation and use

### NPM
1. Open your terminal and move to the root directory of your project.
    ```
    cd project
    ```

2. Run the following command to install Blinds in your project:
    ```
    npm install blinds
    ```

3. In your HTML code, create a tag that will hold the toggle icons and give it your prefered style:
    ```
    <div id="blinds_id" style="width: 24px; height: 24px; position: fixed; top: 10px; right: 10px;"><div>
    ```

4. Import Blinds in your JavaScript code:
    ```
    import { blindsInit } from 'blinds';
    ```

5. Initialize Blinds by calling the function:
    ```
    blindsInit();
    ```

6. Activate the toggle function of the icons by adding the event listener:

    ```
    document.querySelector('#blinds_id').onclick = () => {
        blindsToggle();
    }
    ```

### Using script via CDN
1. Create a tag that will hold the toggle icons and give it your prefered style:
    ```
    <div id="blinds_id" style="width: 24px; height: 24px; position: fixed; top: 10px; right: 10px;"></div>
    ```

2. Add Blinds to your HTML through the script tag. Do this preferably just before the closing body tag. The blinds script must be loaded before your script.js (can be named anything really):

    ```
    <script src="https://cdn.jsdelivr.net/gh/Ikennaf1/blinds@0.6.1/dist/blinds.min.js"></script>
    <script src="script.js"></script>
    </body>    
    ```

3. In your script.js file, initialize blinds:
    ```
    blindsInit()
    ```

4. Activate the toggle function of the icons by adding the event listener:

    ```
    document.querySelector('#blinds_id').onclick = () => {
        blindsToggle();
    }
    ```

That's it, you have successfully installed dark mode on your website. Go ahead and click on the icon. Blinds ships with a default 'bare minimum' style. To learn how you can further customize blinds to suit your needs, head over to the [documentation](https://websitecomingsoon.dev).


## License

Blinds is open-sourced software licensed under the [GNU General Public License version 3](https://opensource.org/license/gpl-3-0/).
