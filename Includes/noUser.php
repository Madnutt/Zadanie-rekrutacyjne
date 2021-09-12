<div class="forms-wrapper">
    <div class="row">
        <form method="post" class="col-sm" action="Includes/register.php">
            <h2>Rejestracja</h2>
            <div class="form-group">
                <label for="username">Login</label>
                <input type="text" id="username" class="form-control" name="username" />
                <small id="usernameHelp" class="form-text text-muted">Login musi mieć conajmniej 6 znaków</small>
            </div>
        
            <div class="form-group">
                <label for="password">Hasło</label>
                <input type="password" id="password" class="form-control" name="password" />
                <small id="passwordHelp" class="form-text text-muted">Hasło musi mieć conajmniej 8 znaków</small>
            </div>
        
            <div class="form-group">
                <label for="firstName">Imię</label>
                <input type="text" id="firstName" class="form-control" name="firstName" />
            </div>
        
            <div class="form-group">
                <label for="lastName">Nazwisko</label>
                <input type="text" id="lastName" class="form-control" name ="lastName" />
            </div>
        
            <fieldset>
                <legend> Płeć </legend>
        
                <div class="form-check">
                    <input type="radio" id="male" class="form-check-input" name="sex" value="male" />
                    <label for="male">Mężczyzna</label>
                </div>
        
                <div class="form-check">
                    <input type="radio" id="female" class="form-check-input" name="sex" value="female" />
                    <label for="female">Kobieta</label>
                </div>
            </fieldset>
        
            <button type="submit" class="btn btn-primary">Zarejestruj</button>
        </form>
        <form method="post" class="col-sm" action="Includes/login.php">
            <h2>Logowanie</h2>
            <div class="form-group">
                <label for="login-username">Login</label>
                <input type="text" id="login-username" class="form-control" name="username" />
            </div>
        
            <div class="form-group">
                <label for="login-password">Hasło</label>
                <input type="password" id="login-password" class="form-control" name="password" />
            </div>
        
            <button type="submit" class="btn btn-primary">Zaloguj</button>
        </form>
    </div>
</div>