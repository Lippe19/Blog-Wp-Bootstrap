 


<div class="card bg-my-color-2 border-0 mb-4 mt-5">
    <div class="card-body">
        <h5>Pesquisar</h5>
<!--        <form role="search" method="get" action="<?php // echo home_url('/'); ?>" class="mb-4">
            <div class="input-group">
                <input type="search" class="form-control" value="<?php // echo get_search_query(); ?>" name="s" />
                <div class="input-group-append">
                    <button class="btn btn-my-color-5" type="submit">Buscar</button>
                </div>
            </div>
        </form>-->
        <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="mb-">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Ex: Pesquisar" value="<?php echo get_search_query(); ?>" name="s" />
                <div class="input-group-append">
                    <button class="btn btn-my-color-4" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>