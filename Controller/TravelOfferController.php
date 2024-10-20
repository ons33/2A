<?php
class TravelOfferController {
    public function showTravelOffer($offer) {
        echo "<table border='1'>";
        echo "<tr><th>Title</th><th>Destination</th><th>Departure Date</th><th>Return Date</th><th>Price</th><th>Disponibility</th><th>Category</th></tr>";
        echo "<tr>";
        echo "<td>{$offer->titre}</td>";
        echo "<td>{$offer->destination}</td>";
        echo "<td>{$offer->date_depart}</td>";
        echo "<td>{$offer->date_retour}</td>";
        echo "<td>{$offer->prix}</td>";
        echo "<td>" . ($offer->disponible ? 'Yes' : 'No') . "</td>";
        echo "<td>{$offer->categorie}</td>";
        echo "</tr>";
        echo "</table>";
    }
}
?>