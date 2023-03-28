body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    background-color: #333;
    color: #fff;
    padding: 10px;
  }
  
  header h1 {
    margin: 0;
  }
  
  nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  
  nav li {
    display: inline-block;
    margin-right: 10px;
  }
  
  nav a {
    color: #fff;
    text-decoration: none;
  }
  
  main {
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
    margin: 0 auto;
  }
  
  section {
    flex-basis: 70%;
    padding: 10px;
  }
  
  section h2 {
    margin-top: 0;
  }
  
  aside {
    flex-basis: 30%;
    padding: 10px;
  }
  
  #articles {
    display: flex;
    flex-wrap: wrap;
  }
  
  .article {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px;
    padding: 10px;
    flex-basis: calc(33.33% - 20px);
  }
  
  .article h3 {
    margin-top: 0;
  }
  
  .article p {
    margin-bottom: 0;
  }