# Ask us tab on every woocommerce single product page #
Insert the ask us tab with the form on every single product page.
## Installation ##
1. Create the survey form questions and customizations as you wish using the Formidable Forms plugin.
2. Copy over the code from current repository to your functions.php replacing the values in brackets`echo FrmFormsController::show_form(28, $key = 'frmprocontact2', $title=false, $description=true);` as follows: (Your created Formidable Form ID, $key= 'Formidable Form Key', $title = true or false depending on wheter or not you would like to display the title set in form, $description = true or false depeneding on whether or not you would like to display description from the form). Also, you can change the title of the tab and its order by modyfing `'title'     => __( 'Your Tab Title here', 'woocommerce' )` and `'priority'  => Your number here`.
