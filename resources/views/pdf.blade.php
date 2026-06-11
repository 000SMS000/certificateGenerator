<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <style>
        body{
            font-family: DejaVu Sans;
            text-align:center;
            padding-top:100px;
        }

        .certificate{
            border:8px solid black;
            padding:50px;
        }

        h1{
            color:#1e40af;
            font-size:40px;
        }

        .name{
            font-size:32px;
            font-weight:bold;
            margin:30px 0;
        }

        .course{
            font-size:24px;
            margin:20px 0;
        }

        .date{
            margin-top:40px;
        }
    </style>
</head>

<body>

<div class="certificate">

    <h1>Certificate of Achievement</h1>

    <p>This certificate is proudly presented to</p>

    <div class="name">
        {{ $name }}
    </div>

    <p>for successfully completing</p>

    <div class="course">
        {{ $course }}
    </div>

    <div class="date">
        Date: {{ $date }}
    </div>

</div>

</body>
</html>