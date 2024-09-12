<x-layouts.app title="contact">
    <h1>Contact</h1>
    <p>· Inhoud: Heb je vragen of wil je met ons in contact komen? Vul het onderstaande formulier in of stuur ons een e-mail op info@smart-solutions.nl. We proberen zo snel mogelijk te reageren!</p>
    <form action="/verzend" method="post">
        <label for="naam">Naam:</label><br>
        <input type="text" id="naam" name="naam" required><br><br>

        <label for="onderwerp">Onderwerp:</label><br>
        <input type="text" id="onderwerp" name="onderwerp" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="tekst">Bericht:</label><br>
        <textarea id="tekst" name="tekst" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Verzenden">
    </form>
    <img src="img/ikea.png" alt="" width="200px" height="auto">
    </x-layouts.app>
