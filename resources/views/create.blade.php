<form method="POST" action="{{ route('characters.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Description:</label>
    <textarea name="description" id="description"></textarea>

    <label for="attack">Attack:</label>
    <input type="number" name="attack" id="attack" required>

    <label for="defence">Defence:</label>
    <input type="number" name="defence" id="defence" required>

    <label for="speed">Speed:</label>
    <input type="number" name="speed" id="speed" required>

    <label for="life">Life:</label>
    <input type="number" name="life" id="life" required>

    <button type="submit">Create Character</button>
</form>
