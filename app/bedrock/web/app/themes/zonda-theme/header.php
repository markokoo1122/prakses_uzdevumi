
<style>

body{
    font-family: sans-serif;
}

.header-container{
    max-width:1550px;
    margin:0 auto;
    padding:16px 40px;

    display:flex;
    align-items:center;
}


.logo img{
    height:30px;
    width:auto;
    display:block;
}

.main-nav{
    margin-left:auto;
    display:flex;
    gap:55px;
}

.main-nav a{
    text-decoration:none;
    color:#111;
    font-size:18px;
    font-weight: bold;
    padding: 20px;
}


.icons{
    display:flex;
    align-items:center;
    gap:18px;
    margin-left:30px;
}


.cart{
    position:relative;
}

.cart-count{
    position:absolute;
    top:-13px;
    right:-12px;
    background:#e53935;
    color:#fff;
    font-size:11px;
    width:16px;
    height:16px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
}
.icon{
    width:20px;
    height:20px;
    fill:#111;
    cursor:pointer;
}

</style>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
<div class="header-container">

    <div class="logo">
    <img 
        src="<?php echo get_template_directory_uri(); ?>/resources/images/logo.png" 
        alt="Zonda Lighting Logo"
    >
</div>

    <nav class="main-nav">
        <a href="#">products</a>
        <a href="#">references</a>
        <a href="#">about us</a>
        <a href="#">contact</a>
    </nav>

    <div class="icons">

    <svg class="icon" viewBox="0 0 24 24">
        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 
        2.3-5 5 2.3 5 5 5zm0 2c-3.3 
        0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z"/>
    </svg>

    <div class="cart">

        <svg class="icon" viewBox="0 0 24 24">
            <path d="M7 18c-1.1 0-2 .9-2 
            2s.9 2 2 2 2-.9 
            2-2-.9-2-2-2zm10 
            0c-1.1 0-2 .9-2 
            2s.9 2 2 2 2-.9 
            2-2-.9-2-2-2zM7.2 
            14h9.5c.8 0 1.5-.5 
            1.7-1.2l2.1-7.3H6.2L5.3 
            3H2v2h2l3.6 7.6-1.3 
            2.4c-.1.2-.2.5-.2.8 
            0 1.1.9 2 2 2h12v-2H8.4l.8-1.6z"/>
        </svg>

        <div class="cart-count">0</div>

    </div>

</div>

</div>
