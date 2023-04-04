<template>
  <nav class="nav">
    <div class="logo-nav-wrapper">
        <div class="logo">
            Ball Pwl
        </div>

        <ul class="nav-container">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    News
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Match Reviews
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Player Analysis
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    Betting Tips
                </a>
            </li>
        </ul>
    </div>

    <div class="search-bar">
        <input type="text"/>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z" fill="#000"></path></svg>
    </div>
  </nav>
</template>

<script>

</script>

<style scoped>
.nav {
    display: flex;
    width: 70%;
    margin: auto;
    align-items: center;
    justify-content: space-between;
}

.logo-nav-wrapper {
    display: flex;
    align-items: center;
    gap: 40px;
}

.logo {
    font-weight: bold;
    font-size: 1.2rem;
    color: red;
}

.nav-container {
    display: flex;
    align-items: center;
    justify-content: center;
    list-style: none;
}

.nav-item {
    display: block;
    padding: 10px 15px;
}

.nav-link {
    color: #fff;
    font-size: 0.9rem;
    text-decoration: none;
}

.search-bar {
    position: relative;
}

.search-bar input {
    width: 210px;
    height: 25px;
    padding: 0 0 0 5px;
}

.search-bar input:focus{
    outline: none;
}

.search-bar svg {
    position: absolute;
    right: 5px;
    top: 3.5px;
}
</style>