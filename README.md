# Project Resources

## Directory Structure
This project follows a structured approach to organizing frontend and view resources. Below is an overview of the directory structure:

```
resources/
├── css/
│   ├── app.css            # Main stylesheet for the application
│   └── custom.css         # Custom styles for additional UI modifications
├── js/
│   └── app.js             # JavaScript file for frontend interactions
├── views/
│   ├── components/        # Reusable UI components
│   │   ├── nav.blade.php      # Navigation bar
│   │   ├── hero.blade.php     # Hero section
│   │   ├── featured.blade.php # Featured section
│   │   └── footer.blade.php   # Footer section
│   ├── partials/          # UI elements for forms and buttons
│   │   ├── input.blade.php       # Input field template
│   │   ├── button.blade.php      # Button template
│   │   └── button-group.blade.php # Button group template
│   ├── layouts/           # Layout files for structuring pages
│   │   └── app.blade.php   # Main layout file
│   └── landing.blade.php  # Landing page template
public/
└── assets/
    └── img/
        └── logo.jpg       # Logo image
```

## Usage
- **CSS**: Stylesheets are stored in the `css/` directory. Modify `custom.css` for additional styles without altering `app.css`.
- **JavaScript**: Add or modify scripts in `app.js` under the `js/` folder.
- **Views**:
    - Reusable UI components are inside `views/components/`.
    - Common UI elements like buttons and inputs are in `views/partials/`.
    - The main layout is in `views/layouts/app.blade.php`.
    - The landing page structure is in `views/welcome.blade.php`.
- **Assets**: Static files such as images are stored in `public/img/`.

## Contributing
- Follow the existing structure when adding new components or styles.
- Ensure that any modifications to styles or scripts do not break existing layouts.
- Use Laravel's Blade templating features for modular and reusable code.


---
For any questions or improvements, feel free to contact me at 0735712985 and email shikweninhlamulo@gmail.com.

