@extends('frontend/layouts/app')

@section('content')


<main>
    <section class="background">
        <div class="background__animation">
            <div class="background__animation--box">&quest;</div>
        </div>

        <!-- ---------------index--------------- -->

        <div class="index__content" id="index">
            <form data-js="card-container" class="card__container">
                <!-- <section class="card">
      <span class="card__bookmark card__bookmark--active"></span>
      <p class="card__question">Which actor plays John Snow?</p>
      <p class="card__answer">The english actor named Kit Harrington!</p>
    </section>

    <section class="card">
      <span class="card__bookmark card__bookmark--active"></span>
      <p class="card__question">Who is John Snow?</p>
      <p class="card__answer">The king of the North!</p>
    </section>

    <section class="card">
      <span class="card__bookmark card__bookmark--active"></span>
      <p class="card__question">Who is the enemy?</p>
      <p class="card__answer">The Lanisters.</p>
    </section> -->
            </form>
        </div>


        <!-- ---------------create--------------- -->

        <div class="create__content hidden" id="create">
            <div class="content">
                <h2 class="content__intro">Create Your Card</h2>

                <section class="name">
                    <label for="username">Username:</label>
                    <br>
                    <input class="name__formular" type="text" id="username" name="name">
                    <!-- <br>
       <input class="name__button" type="submit" value="submit"> -->
                </section>

                <section class="about">
                    <label for="about">About me:</label>
                    <br>
                    <textarea class="about__formular" id="about" name="text" cols="35" rows="8"></textarea>
                    <!-- <br>
        <input class="about__button" type="submit" value="submit"/> -->
                </section>

                <section class="confirm">
                    <div class="confirm__checkbox">
                        <input type="checkbox" id="accept">
                        <label for="accept">Ich bin einverstanden</label>
                    </div>
                    <button class="confirm__button" type="submit" value="submit"> 1,2,3 ich bin dabei! </button>
                </section>

                <section class="faq">
                    <p><a href="https://www.wikipedia.com" target="_blank" rel="noopener noreferrer">Hier</a> bekommst du Antworten auf deine Fragen</p>
                </section>
            </div>
        </div>

        <!-- ---------------profile--------------- -->

        <div class="profile__content hidden" id="profile">
            <section class="user__profile--wrapper">
                <img class="box user__img" src="./img/profile.png"></img>
                <div class="user__name">User Name</div>
            </section>
            <div class="box user__text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident eum, praesentium atque animi repudiandae doloribus, ducimus saepe eveniet aliquid sint itaque? Necessitatibus quod veritatis dolore. Tenetur, culpa accusantium vel optio numquam, porro provident expedita corporis minima ratione cumque? Recusandae a totam quasi magni repellendus voluptates labore numquam mollitia inventore tempore.</div>
            <div class="user__header">User header</div>
            <section class="user__profile--wrapper">
                <div class="user__details">weil</div>
                <div class="user__details">wir</div>
                <div class="user__details">es</div>
                <div class="user__details">einfach</div>
                <div class="user__details">drauf</div>
                <div class="user__details">haben</div>
                <div class="user__details">!!!!!!!!11</div>
                <div class="user__details">Tschüss</div>
                <div class="user__details">JavaScript!</div>
            </section>
        </div>

        <!-- ---------------settings--------------- -->

        <div class="settings__content hidden" id="settings">

            <section class="switches">
                <h3>Darkmode</h3>
                <section class="switch">
                    <div class="switch__one">
                        <input type="checkbox" value="none" id="switch__one" name="check" unchecked />
                        <label class="switch__switch" for="switch__one"></label>
                    </div>
                </section>
                <h3>Lorem, ipsum dolor.</h3>
                <section class="switch">
                    <div class="switch__two">
                        <input type="checkbox" value="none" id="switch__two" name="check" unchecked />
                        <label for="switch__two"></label>
                    </div>
                </section>
            </section>

            <section class="checkbox-main">
                <!-- <div class="checkbox">
                    <h3 class="checkbox__title">Choose your player!</h3>
                    <div class="checkbox__form">
                        <input type="checkbox" id="checkbox1">
                        <label for="checkbox1">Starsky</label>
                    </div>
                    <div class="checkbox__form">
                        <input type="checkbox" id="checkbox2">
                        <label for="checkbox2">Hajo</label>
                    </div>
                    <div class="checkbox__form">
                        <input type="checkbox" id="checkbox3">
                        <label for="checkbox3">Yasin</label>
                    </div>
                    <div class="checkbox__form">
                        <input type="checkbox" id="checkbox4">
                        <label for="checkbox4">Kay</label>
                    </div>
                </div> -->
        </div>
    </section>
    </section>
</main>

@endsection