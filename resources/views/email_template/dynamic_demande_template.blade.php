<!DOCTYPE html>
<htm>
<head>
    <meta charset="UTF-8">
    <style>
        .logo-img{
            display: block;
            width: 130px;
            height: 130px;
            margin: auto;
        }
        .subject-zone{
            background-color: #07476b;
            color: #f9f9f9;
            height: 50px;
            text-align: center;
            margin-top:10px;
        }

        .subject-zone .text{
            font-size: 30px;
            font-weight: bold;
            font-family: Gabriola;
            text-align: center;
        }

        .content{
            color: #07476b;
            font-family: Gabriola;
            font-size: 20px;
            padding-top: 20px;
        }

        table{
            margin: auto;
        }

        .label{
            font-weight: bold;
        }

    </style>
</head>
<body  id="page-top">
    <header>
            <img class="logo-img" src="{{ $message->embed(public_path().'/assets/logo.png') }}">
        <div class="subject-zone">
            <div class="text">{{$data['subject']}}</div>
        </div>
    </header>
    <div class="content">
        <table>
            <tr>
                <td class="label">Nom Complet:</td><td>{{$data['completename']}}</td><td class="label">Email:</td><td>{{$data['email']}}</td>
            </tr>
            <tr>
                <td class="label">Téléphone:</td><td>{{$data['phone']}}</td><td class="label">Sexe du destinateur:</td><td>{{$data['gender']}}</td>
            </tr>
            <tr>
                @if($data['subject']!='Réservation de matériel informatique')
                    <td class="label">Catégorie:</td><td>{{$data['category']}}</td>
                @endif
                @if($data['subject']=='Demande de formation')
                    <td class="label">Type De Formation:</td><td>{{$data['trainingtype']}}</td>
                @endif
                @if($data['subject']=='Réservation de matériel informatique')
                    <td class="label">Quantité:</td><td>{{$data['quantity']}}</td><td class="label">Type de matériel:</td><td>{{$data['materialtype']}}</td>
                @endif
            </tr>
            <tr>
                <td class="label">Message:</td><td>{{$data['message']}}</td>
            </tr>
        </table>
    </div>
</body>
</html>
