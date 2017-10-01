<?php include (dirname(__FILE__).'/parts/header.php'); ?>

<main>
    <section class="tires-and-wheels">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <div class="t-w-title">
                      <h3> Шины </h3>
                  </div>

                  <div class="t-w-content container-tabs">
                      <div class="tabs flex">
                          <div class="tab active" data-tab="filter-options">Подбор по параметрам</div>
                          <div class="tab" data-tab="filter-auto">Подбор шин по авто</div>
                      </div>
                      <div class="wrapper-tab-content wrapper-tab-content--tire">
                          <div class="tab-content" id="filter-options">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = 'diametr'>Диаметр</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '554' >554</div>
                                              <div class="s-option" data-value = '572'>572</div>
                                              <div class="s-option" data-value = '588'>588</div>
                                              <div class="s-option" data-value = '604'>604</div>
                                              <div class="s-option" data-value = '607'>607</div>
                                              <div class="s-option" data-value = '648'>648</div>
                                              <div class="s-option" data-value = '664'>664</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value =''>Профиль</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '6,45' >6,45</div>
                                              <div class="s-option" data-value = '6,15'>6,15</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Сезонность</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                              <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                              <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                              <div class="s-option" data-value = 'sum'>летняя</div>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="col-sm-6">
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Ширина</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '554' >554</div>
                                              <div class="s-option" data-value = '572'>572</div>
                                              <div class="s-option" data-value = '588'>588</div>
                                              <div class="s-option" data-value = '604'>604</div>
                                              <div class="s-option" data-value = '607'>607</div>
                                              <div class="s-option" data-value = '648'>648</div>
                                              <div class="s-option" data-value = '664'>664</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value =''>Бренд</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '6,45' >6,45</div>
                                              <div class="s-option" data-value = '6,15'>6,15</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Шипованность</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                              <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                              <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                              <div class="s-option" data-value = 'sum'>летняя</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-xs-12 center-block">
                                      <button class="btn btn-filter">
                                          Подобрать
                                      </button>
                                  </div>
                              </div>
                          </div>
                          <div class="tab-content" id="filter-auto">
                              <div class="row">
                                  <div class="col-sm-6">
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = 'diametr'>Диаметр</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '554' >554</div>
                                              <div class="s-option" data-value = '572'>572</div>
                                              <div class="s-option" data-value = '588'>588</div>
                                              <div class="s-option" data-value = '604'>604</div>
                                              <div class="s-option" data-value = '607'>607</div>
                                              <div class="s-option" data-value = '648'>648</div>
                                              <div class="s-option" data-value = '664'>664</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value =''>Профиль</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '6,45' >6,45</div>
                                              <div class="s-option" data-value = '6,15'>6,15</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Сезонность</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                              <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                              <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                              <div class="s-option" data-value = 'sum'>летняя</div>
                                          </div>
                                      </div>

                                  </div>
                                  <div class="col-sm-6">
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Ширина</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '554' >554</div>
                                              <div class="s-option" data-value = '572'>572</div>
                                              <div class="s-option" data-value = '588'>588</div>
                                              <div class="s-option" data-value = '604'>604</div>
                                              <div class="s-option" data-value = '607'>607</div>
                                              <div class="s-option" data-value = '648'>648</div>
                                              <div class="s-option" data-value = '664'>664</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value =''>Бренд</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = '6,45' >6,45</div>
                                              <div class="s-option" data-value = '6,15'>6,15</div>
                                          </div>
                                      </div>
                                      <div class="custom-select">
                                          <input type="hidden" value="" class="select-value">
                                          <button type="button" class="select-btn" data-value = ''>Шипованность</button>
                                          <div class="select-options">
                                              <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                              <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                              <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                              <div class="s-option" data-value = 'sum'>летняя</div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="row">
                                  <div class="col-xs-12 center-block">
                                      <button class="btn btn-filter">
                                          Подобрать
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
                <div class="col-md-6">
                    <div class="t-w-title">
                        <h3> Диски </h3>
                    </div>

                    <div class="t-w-content container-tabs-2">
                        <div class="tabs flex">
                            <div class="tab active" data-tab="filter-options-2">Подбор по параметрам</div>
                            <div class="tab" data-tab="filter-disk">Подбор дисков по авто</div>
                        </div>
                        <div class="wrapper-tab-content wrapper-tab-content--disk">
                            <div class="tab-content" id="filter-options-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = 'diametr'>Диаметр</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '554' >554</div>
                                                <div class="s-option" data-value = '572'>572</div>
                                                <div class="s-option" data-value = '588'>588</div>
                                                <div class="s-option" data-value = '604'>604</div>
                                                <div class="s-option" data-value = '607'>607</div>
                                                <div class="s-option" data-value = '648'>648</div>
                                                <div class="s-option" data-value = '664'>664</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value =''>Бренд</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '6,45' >6,45</div>
                                                <div class="s-option" data-value = '6,15'>6,15</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = ''>PCD</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                                <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                                <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                                <div class="s-option" data-value = 'sum'>летняя</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = ''>Ширина диска</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '554' >554</div>
                                                <div class="s-option" data-value = '572'>572</div>
                                                <div class="s-option" data-value = '588'>588</div>
                                                <div class="s-option" data-value = '604'>604</div>
                                                <div class="s-option" data-value = '607'>607</div>
                                                <div class="s-option" data-value = '648'>648</div>
                                                <div class="s-option" data-value = '664'>664</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value =''>DIA</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '6,45' >6,45</div>
                                                <div class="s-option" data-value = '6,15'>6,15</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 center-block">
                                        <button class="btn btn-filter">
                                            Подобрать
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="filter-disk">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = 'diametr'>Диаметр 2</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '554' >554</div>
                                                <div class="s-option" data-value = '572'>572</div>
                                                <div class="s-option" data-value = '588'>588</div>
                                                <div class="s-option" data-value = '604'>604</div>
                                                <div class="s-option" data-value = '607'>607</div>
                                                <div class="s-option" data-value = '648'>648</div>
                                                <div class="s-option" data-value = '664'>664</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value =''>Бренд 2</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '6,45' >6,45</div>
                                                <div class="s-option" data-value = '6,15'>6,15</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = ''>PCD 2</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = 'all-seasons' >Всесезонная</div>
                                                <div class="s-option" data-value = 'd-z'>Дорожная +зимняя </div>
                                                <div class="s-option" data-value = 'g-s'>Грязь и снег</div>
                                                <div class="s-option" data-value = 'sum'>летняя</div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value = ''>Ширина диска</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '554' >554</div>
                                                <div class="s-option" data-value = '572'>572</div>
                                                <div class="s-option" data-value = '588'>588</div>
                                                <div class="s-option" data-value = '604'>604</div>
                                                <div class="s-option" data-value = '607'>607</div>
                                                <div class="s-option" data-value = '648'>648</div>
                                                <div class="s-option" data-value = '664'>664</div>
                                            </div>
                                        </div>
                                        <div class="custom-select">
                                            <input type="hidden" value="" class="select-value">
                                            <button type="button" class="select-btn" data-value =''>DIA</button>
                                            <div class="select-options">
                                                <div class="s-option" data-value = '6,45' >6,45</div>
                                                <div class="s-option" data-value = '6,15'>6,15</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 center-block">
                                        <button class="btn btn-filter">
                                            Подобрать
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-row flex flex--aCenter flex--jBetween">
                        <div class="banner-item flex flex--aCenter">
                            <div class="banner-item__img"><img src="img/tire.svg" alt="tire"></div>
                            <p>Только свежиешины</p>
                        </div>
                        <div class="banner-item flex flex--aCenter">
                            <div class="banner-item__img"><img src="img/wallet.svg" alt="wallet"></div>
                            <p>Отгрузка товара без предоплаты</p>
                        </div>
                        <div class="banner-item flex flex--aCenter">
                            <div class="banner-item__img"><img src="img/bus.svg" alt="bus"></div>
                            <p>Быстрая доставка 1-2 дня</p>
                        </div>
                        <div class="banner-item flex flex--aCenter">
                            <div class="banner-item__img"><img src="img/clock.svg" alt="clock"></div>
                            <p>Гарантия на возврат 30 дней</p>
                        </div>
                        <div class="banner-item flex flex--aCenter">
                            <div class="banner-item__img"><img src="img/inf.svg" alt="inf"></div>
                            <p>Помощь в выборе</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-model ">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h2 class="title title--blue">Популярные модели шин</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-offset-1">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>Летняя шина
                                Michelin Energy XM2
                                195/65 R15 91H</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>Летняя шина
                                Michelin Energy XM2
                                195/65 R15 91H</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>Летняя шина
                                Michelin Energy XM2
                                195/65 R15 91H</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm col-xs-6">
                    <div class="product">
                        <div class="product__stockWrapper">
                            <div class="product__stock product__stock--sale">
                                <span>Лучшая цена</span>
                            </div>
                        </div>

                        <a href="#" class="product__img">
                            <img src="img/product.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>Летняя шина
                                Michelin Energy XM2
                                195/65 R15 91H</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>Летняя шина
                                Michelin Energy XM2
                                195/65 R15 91H</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="stock-banner hidden-xs">
        <div class="container">
            <div class="row">
                <div class="slider-stock owl-carousel">
                    <div class="slider-item">
                        <div class="slider-stock__name"><span>Акция</span></div>
                        <div class="slider-stock__title">
                            <h1>При покупке шины + диски
                                <span>3%</span>
                            </h1>
                        </div>


                        <img src="img/banner.jpg" alt="banner">
                    </div>
                    <div class="slider-item">
                        <div class="slider-stock__name"><span>Акция 2</span></div>
                        <div class="slider-stock__title">
                            <h1>При покупке шины + диски
                                <span>13%</span>
                            </h1>
                        </div>


                        <img src="img/banner.jpg" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="popular-model popular-model--disk">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="text-center">
                        <h2 class="title title--blue">Популярные модели дисков</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-offset-1">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product-2.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>CMS 142 7,5X15
                                5X120 ET11 DIA74,1
                                (silver)</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product-2.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>CMS 142 7,5X15
                                5X120 ET11 DIA74,1
                                (silver)</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product-2.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>CMS 142 7,5X15
                                5X120 ET11 DIA74,1
                                (silver)</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm  col-xs-6">
                    <div class="product">
                        <div class="product__stockWrapper">
                            <div class="product__stock product__stock--sale">
                                <span>Лучшая цена</span>
                            </div>
                        </div>

                        <a href="#" class="product__img">
                            <img src="img/product-2.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>CMS 142 7,5X15
                                5X120 ET11 DIA74,1
                                (silver)</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="product">
                        <a href="#" class="product__img">
                            <img src="img/product-2.png" alt="product">
                        </a>
                        <div class="product__info">
                            <p>CMS 142 7,5X15
                                5X120 ET11 DIA74,1
                                (silver)</p>
                        </div>
                        <div class="product__price">
                            <span class="price">1 300</span>
                            <span class="currency">грн</span>
                        </div>
                        <div class="product__btn-wrapper">
                            <a href="#" class="product__btn">Подобрать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="banner-info-items flex flex--jCenter">
                        <div class="banner-info-item">
                            <div class="banner-info-item__img">
                                <img src="img/hand.svg" alt="hand">
                            </div>
                            <div class="banner-info-item__text">
                                <p><span>Качественный  товар</span>
                                    <br> от производителя</p>
                            </div>
                        </div>
                        <div class="banner-info-item">
                            <div class="banner-info-item__img">
                                <img src="img/car.svg" alt="car">
                            </div>
                            <div class="banner-info-item__text">
                                <p><span>Быстрая доставка</span>
                                    <br>
                                    1-2 дня</p>
                            </div>
                        </div>
                        <div class="banner-info-item">
                            <div class="banner-info-item__img">
                                <img src="img/clock2.svg" alt="clock2">
                            </div>
                            <div class="banner-info-item__text">
                                <p><span>Круглосуточно</span>
                                    <br>
                                    отвечаем на вопросы</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="reviews-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="reviews__title">
                        <h2>Отзывы клиентов <span>(22)</span></h2>
                    </div>
                    <div class="reviews">


                        <div class="review">
                            <div class="flex">
                                <div class="review__user-name">
                                    <span>Валерий</span>
                                </div>
                                <div class="stars flex">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                </div>
                            </div>
                            <div class="review__date">
                                <span>21.08.2017</span>
                            </div>
                            <div class="review__text">
                                <p>
                                    Всем доволен, качество обслуживания высокое
                                </p>
                            </div>

                        </div>
                        <div class="review">
                            <div class="flex">
                                <div class="review__user-name">
                                    <span>Евгений</span>
                                </div>
                                <div class="stars flex">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                </div>
                            </div>
                            <div class="review__date">
                                <span>21.08.2017</span>
                            </div>
                            <div class="review__text">
                                <p>
                                    Работой сотрудников магазина доволен, за свои слова отвечают, спасибо за сотрудничество
                                </p>
                            </div>

                        </div>
                        <div class="review">
                            <div class="flex">
                                <div class="review__user-name">
                                    <span>Максим</span>
                                </div>
                                <div class="stars flex">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                    <img src="img/star.svg" alt="star">
                                </div>
                            </div>
                            <div class="review__date">
                                <span>21.08.2017</span>
                            </div>
                            <div class="review__text">
                                <p>
                                    Брал позавчера шины барум, сегодня уже забрал, все устроило
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="reviews__btns">
                        <div class="flex flex--aCenter">
                            <a href="#" class="btn reviews__btn reviews__btn--live">Оставить отзыв</a>
                            <a href="#" class="btn reviews__btn reviews__btn--read">Читать все отзывы</a>
                        </div>
                     </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
    </section>

</main>



<?php include (dirname(__FILE__).'/parts/footer.php'); ?>
