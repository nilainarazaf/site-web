<header class="header">
    <nav class="navbar">
        <ul class="left-item">
            <a href="#"><li><span class="initial">Razafindrambola</span></li></a>
        </ul>
        <ul class="right-items">
            <li>
                <form class="search-form wrap" method="post">
                    <input type="text" class="search-input" placeholder="Recherche projet...">
                    <button type="submit" class="search-button">
                        <i class="search fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>                      
            </li>
            <a><li>Accueil</li></a>
            <a><li>CV</li></a>
        </ul>
    </nav>                          
</header>


<style>
/*/////////////HEADER BEGIN///////////////*/
header{
    width: 100vw;
    min-height: 10vh;
    display: flex;
}
.initial{
    padding-left: 5px;
    border-left: 2px solid #ce6a6b;
    transition: 0.5s ease-in-out;
}
.initial:hover{
    margin-left: 5px;
    letter-spacing: 1px;
}
.navbar {
    width: inherit;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 30px;
    background-color: #4a919e;
    background-color: #212e53;
    color: white;
}
.navbar ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
.left-item {
    order: -1; /* placer en premier à gauche */
}
.right-items {
    width: inherit;
    display: inherit;
    justify-content: flex-end;
}
.right-items li{
    padding: 0 20px;
}
.right-items a:hover{
    color: #fff;
    transform: scale(1.2) translateX(-5px);
    cursor: pointer;
}

.wrap{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.search-input {
    width: 60%;
    border: none;
    border-right: none;
    padding: 7px;
    border-radius: 5px;
    outline: none;
    transition: 0.5s ease-in-out;
    overflow: hidden;
    color: #a1a1a1;
    background-color: #00000000;
}
.search{
    color: #ce6a6b;
    font-size: 0.7em;
}
.search-button {
    width: 40px;
    height: 1.3em;
    border: none;
    text-align: center;
    color: #bdbdbd;
    border-radius: 0 5px 5px 0;
    cursor: pointer;
    font-size: 1em;
    background-color: #212e53;
    transform: translateY(-3px);
}
.search-input:hover, .search-input:focus {
    background-color: #cecece;
    color: #212e53;
    width: 100%
}
/*/////////////HEADER END///////////////*/





</style>