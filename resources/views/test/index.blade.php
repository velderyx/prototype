<!DOCTYPE html>
<html>
<head>
    <title>Add Names and Town</title>
</head>
<body>
    <h2>Add Names and Town</h2>

    <form id="nameForm" action="{{ route('test.store') }}" method="post">
        @csrf
        <div id="nameInputs">
            <div>
                <label for="name1">Name 1:</label>
                <input type="text" id="name1" name="names[]">
                <button type="button" onclick="addNameInput()">+</button>
                <button type="button" onclick="removeNameInput(this)">-</button>
            </div>
        </div>
        <br>

        <label for="town">Town:</label>
        <input type="text" id="town" name="town">
        <br>

        <button type="submit">Submit</button>
    </form>

    <script>
        let nameCounter = 1;

        function addNameInput() {
            nameCounter++;
            const container = document.getElementById("nameInputs");
            const div = document.createElement("div");
            div.innerHTML = `
                <label for="name${nameCounter}">Name ${nameCounter}:</label>
                <input type="text" id="name${nameCounter}" name="names[]">
                <button type="button" onclick="addNameInput()">+</button>
                <button type="button" onclick="removeNameInput(this)">-</button>
            `;
            container.appendChild(div);
        }

        function removeNameInput(button) {
            const div = button.parentElement;
            div.remove();
            nameCounter--;
        }
    </script>
</body>
</html>
