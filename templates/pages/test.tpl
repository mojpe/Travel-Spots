<!DOCTYPE html>
<html>
    <head>
        <title>{{title}}</title>
        <script src="/js/jquery.min.js"></script>
    </head>
    <style>
        .row {
            margin: 25px;
        }

        .col {
            border: 1px solid black;
            padding: 10px 30px;
        }
        input[type="button"]{
            text-decoration: none;
            padding: 10px 15px;
            border: none;
            outline: none;
            border-radius: 10px;
        }
        .delete:hover{
            background-color: rgba(255,0,0,0.8);
        }
        .edit:hover{
            background-color: rgba(0,0,255,0.6);
        }
        input[type="text"]{
            border: none;
            padding: 10px 15px;
            outline-color: black;
            background-color: rgba(0,100,255,0.3);

        }
        input[readonly]{
            background-color: rgba(0,100,255,0.5);
        }
    </style>
    <body>
        <table>
            <tr class="row">
                <td class="col"><h4>President</h4></td>

            </tr>
            {% for president in presidents %}
            <tr class="row">
                <td class="col"><input class="president" type='text' value='{{president.president}}' id="{{president.id}}" readonly></td>
                <td class='col'><input class="edit" type="button" data-id2="{{president.id}}" value="Edit"></td>
                <td class='col'><input class="delete" type="button" data-id3="{{president.id}}" value="&#10060;"></td>
            </tr>
            {% endfor %}
            <tr class="row">
                <td></td>
                <td class="col"><input type="button" value="Add"></td>
            </tr>
        </table>
    </body>
    <footer>
        <script src="{{javascript}}"></script>
    </footer>
</html>