# File Structure

index.html : Main user interface and entry point.

assets/style.css : Minimal CSS styling for a clean, command-line-inspired look.

assets/script.js : JavaScript logic, including AJAX handling.

src/ : PHP application code.

src/command/CommandInterface.php : Interface that every command must implement. This ensures new commands can be added easily without changing existing logic.

src/command/CommandHandler.php : Responsible for registering and executing available commands.

## Adding a New Command

Create a new class in src/command/ and implement the CommandInterface.

Define the logic in the execute() method of your new class.

Register your new command inside the CommandHandler constructor so it becomes available to the app.


