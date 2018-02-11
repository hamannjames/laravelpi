<!DOCTYPE html>

<html>
<head>
    <title>Hello Pi</title>
</head>

<body>
    <ul>
        @foreach ($people as $person)

        <li>Hello, my name is <?= $person; ?>

        @endforeach
    </ul>
</body>
</html>
