<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,900" rel="stylesheet">

        <link rel="stylesheet" href="/css/admin.css">
        <link rel="stylesheet" href="/fonts/elegant_font.css">
    </head>
    <body>
        <nav>
            <div id="logo">
                <span class="highlighted">D</span>igitales <span class="highlighted">M</span>useum
            </div>

            <div id="search-bar">
                <span class="icon icon_search"></span>
                <input type="text" name="search_query" placeholder="Search the museum">
            </div>

            <div id="user-information">
                <span id="welcome-message">Willkommen zurück, Herr Administrator!</span>

                <a href="/logout" id="logout-icon">
                    <span class="icon icon_lock_alt"></span>
                </a>
            </div>
        </nav>


        <div id="content">
          <div id="site-title">
              <div id="site-title-wrapper">
                  <span id="site-title-label">Settings</span>
              </div>
          </div>
            <div id="site-content">
                <div id="label-site">
                    <span id="label-user">User bearbeiten</span>
                </div>

                <div id="formular-edit">
                    <form action="/admin/user/{{$id}}/update" method="post">
                        {{ csrf_field() }}
            			<label class="label-name" for="name">Benutzername</label>
            			<br>
            			<input type="text" name="name" value="{{$name}}">
            			<br/>
                        <label for="email">E-Mail</label>
            			<br/>
            			<input type="email" name="email" value="{{$email}}">
                        <br/>
            			<label for="password">Neues Passwort eingeben</label>
            			<br/>
            			<input type="password" name="password">
            			<br/>
                        <label for="is_admin">Zum Admin machen?</label>
            			<br/>
            			<input type="number" name="is_admin" min="0" max="1" value="{{$is_admin}}">
            			<br/>
            			<button type="submit">Änderungen Bestätigen</button>

                        <a href="/admin/users">
                            <button type="button">
                                Änderung verwerfen
                            </button>
                        </a>

                    </form>
                </div>

            </div>
        </div>




    </body>
</html>
