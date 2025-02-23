# Multi-Step Form in Laravel

## How the form works
The model consists of 3 steps:
1. Step 1: Enter the basic information (name, e-mail).
2. Step 2: Choose the study information.
3. Step 3: Enter additional information.
After completing all the steps, the data is saved to the database.

# The challenges I faced
1. Problem with data validation between steps.
   - Solution: Session was used to temporarily store data.
2. Trouble displaying success messages.
   - Solution: alert was used to display messages attractively.

## How to run the project
1. Download the project and unzip.
2. Open Terminal and navigate to the project folder.
3. Install dependencies using the command:
   ```bash
   composer install
