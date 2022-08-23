<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

body{
    background: #261E14;
    color: #f2f2f2
}

main {
    padding: 1rem 15%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.contenedor {
    width: 100%
}

.navbar {
    width: 100%;
    padding: 1rem 15%;
    margin-bottom: 1rem;
    background: #F24452;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h1.titulo {
    color: white;
}

.navbar nav {
    display: flex;
    gap: 1rem;
}

nav a {
    text-decoration: none;
    font-size: 1.2rem;
    color: white;
}

nav a:hover {
    color: #F2AEC1;
}

table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: #404040;
    border-collapse: collapse;
    border-width: 2px;
    border-color: #7ea8f8;
    border-style: solid;
    color: #f2f2f2;
    transition: .3s;
}

table tr:hover {

    background-color: #404040;
}

table td,
table th {
    border-width: 2px;
    border-color: #7ea8f8;
    border-style: solid;
    padding: 5px;
}

table thead {
    background-color: #7ea8f8;
}

form{
    width: 90%;
}

input[type="submit"],
main a {
    background-color: #04ADBF;
    border-radius: 8px;
    border-style: none;
    box-sizing: border-box;
    color: #FFFFFF;
    display: inline-block;
    height: 40px;
    line-height: 20px;
    list-style: none;
    font-size: 1.2rem;
    margin: 0;
    padding: 10px 16px;
    text-decoration: none;
    user-select: none;
    transition: color 100ms;
}

input[type="submit"]:hover,
main a:hover {
    background-color: #0D6973;
}

input,
textarea {
    width: 100%;
    padding: .5rem;
    height: 2.5rem;
    background-color: #f2f2f2;
    border-radius: 10px;
    border: 3px solid transparent;
}

input:hover,
textarea:hover {
    background-color: #d4cdcd;
}

input:focus,
textarea:active {
    border: 3px solid #0D6973;
    outline: none;
}
</style>