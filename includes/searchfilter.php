<!-- Searchfilter Modal -->
<div class="modal fade" id="searchfilter" tabindex="-1" role="dialog" aria-labelledby="searchfilterModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Einloggen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="btn-close"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form class="row">
                        <div class="col-12 col-sm-12">
                            <h3>Suchradius</h3>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="form-group select-type">
                                <div class="select-wrap">
                                    <select class="form-control" id="sichtabrkeit">
                                        <option selected disabled>50km</option>
                                        <option>75km</option>
                                        <option>100km</option>
                                        <option>125km</option>
                                        <option>150km</option>
                                        <option>175km</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12">
                            <h3>Filter</h3>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="form-group select-type has-float-label mt-2">
                                <div class="select-wrap">
                                    <select class="form-control" id="sichtabrkeit">
                                        <option selected disabled>Öffentliche Tour</option>
                                        <option>Nur für Freunde</option>
                                    </select>
                                </div>
                                <label for="sichtabrkeit">Sortieren nach</label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="form-group has-float-label mt-2">
                                <input class="form-control" id="timeonly" type="text" required placeholder="Uhrzeit" autocomplete="off" value="Nachmittags">
                                <label for="timeonly">Uhrzeit</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <a href="#" class="btn btn-primary btn-block" title="Filter übernehmen">Filter übernehmen</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 mt-3">
                            <a href="#" class="btn btn-default btn-block" title="Abbrechen">Abbrechen</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>