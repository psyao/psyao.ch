<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>psyao.ch</title>
</head>
<body>
<h1>psyao.ch : formulaire de contact</h1>

<h2>{{{ $mail->subject }}}</h2>

<p>{{{ $mail->date }}}</p>

<p>{{ nl2br($mail->body) }}</p>

{{{ $mail->name }}},<br>
{{{ $mail->email }}}
</body>
</html>