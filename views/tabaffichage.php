

<h2>Liste des tache : </h2>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Tache a effectué</th>
            <th>Modification</th>
            <th>Supprimer</th>
            <input type='submit' name="supp" class='supprimer' value='Supprimer' >
        </tr>
        <?php

        $conn = new Bdd;
        $data = $conn->readAll();

        foreach ($data as $value){
            echo "<tr>";
            echo "<td>" . $value["id"] . "</td>";
            echo "<td>" . $value["tache"] . "</td>";
            echo "<td><input type='submit' class='modifier' value='Modifier'></td>";
            echo "<td><input type='submit' class='supprimer' value='Supprimer' ></td>";
            echo "</tr>"; 
        }
        ?>