<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Künstlerdaten anzeigen</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1>Künstlerdaten</h1>
    <div id="artists-container"></div>

    <script>
        'use strict';

        const container = document.querySelector('#artists-container');

        // Externe JSON-Quelle laden
        fetch('https://www.devtoolsdaily.com/fake_json_api/artists')
            .then(response => response.json())
            .then(data => {
                const table = createTable();
                data.forEach(artistData => {
                    const row = createTableRow(artistData.name, artistData.album, artistData.year);
                    table.querySelector('tbody').appendChild(row);
                });
                container.appendChild(table);
            })
            .catch(error => {
                console.error('Fehler beim Abrufen der Daten:', error);
                container.textContent = 'Daten konnten nicht geladen werden.';
            });

        function createTable() {
            const table = document.createElement('table');
            const tableHead = document.createElement('thead');
            const tableBody = document.createElement('tbody');
            const tableHeadRow = document.createElement('tr');

            const tableHeadCell_1 = document.createElement('th');
            const tableHeadCell_2 = document.createElement('th');
            const tableHeadCell_3 = document.createElement('th');

            tableHeadCell_1.textContent = 'Künstler';
            tableHeadCell_2.textContent = 'Album';
            tableHeadCell_3.textContent = 'Jahr';

            tableHeadRow.append(tableHeadCell_1, tableHeadCell_2, tableHeadCell_3);
            tableHead.appendChild(tableHeadRow);
            table.appendChild(tableHead);
            table.appendChild(tableBody);

            table.className = 'table table-striped';

            return table;
        }

        function createTableRow(artist, album, year) {
            const row = document.createElement('tr');

            const cell_1 = document.createElement('td');
            const cell_2 = document.createElement('td');
            const cell_3 = document.createElement('td');

            cell_1.textContent = artist;
            cell_2.textContent = album;
            cell_3.textContent = year;

            row.append(cell_1, cell_2, cell_3);

            return row;
        }
    </script>
</body>
</html>