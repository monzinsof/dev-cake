<?php echo $this->Html->script('tableeditablej', FALSE); ?>
<?php echo $this->Html->script('jquery-1.8.2.min', FALSE); ?>
<?php echo $this->Html->script('jquery.slimscroll.min', FALSE); ?>
 <div id="page" class="dashboard">

                    <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->

                    <div class="row-fluid circle-state-overview">

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                            <div class="circle-stat block">

                                <div class="visual">

                                    <div class="circle-state-icon">

                                        <i class="icon-user turquoise-color"></i>

                                    </div>

                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="35" data-fgColor="#4CC5CD" data-bgColor="#ddd">

                                </div>

                                <div class="details">

                                    <div class="number">+120</div>

                                    <div class="title">Nouveaux candidats</div>

                                </div>



                            </div>

                        </div>

                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                            <div class="circle-stat block">

                                <div class="visual">

                                    <div class="circle-state-icon">

                                        <i class="icon-tags red-color"></i>

                                    </div>

                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="65" data-fgColor="#e17f90" data-bgColor="#ddd"/>

                                </div>

                                <div class="details">

                                    <div class="number">22</div>

                                    <div class="title">Nouveaux notes frais</div>

                                </div>



                            </div>

                        </div>







                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                            <div class="circle-stat block">

                                <div class="visual">

                                    <div class="circle-state-icon">

                                        <i class="icon-comments-alt gray-color"></i>

                                    </div>

                                    <input class="knob"  data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="15"  data-fgColor="#b9baba" data-bgColor="#ddd"/>

                                </div>

                                <div class="details">

                                    <div class="number">+387</div>

                                    <div class="title">Messageries</div>

                                </div>



                            </div>

                        </div>



                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                            <div class="circle-stat block">

                                <div class="visual">

                                    <div class="circle-state-icon">

                                        <i class="icon-eye-open purple-color"></i>

                                    </div>

                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="45" data-fgColor="#c8abdb" data-bgColor="#ddd"/>

                                </div>

                                <div class="details">

                                    <div class="number">12</div>

                                    <div class="title">Demandes vacances</div>

                                </div>



                            </div>

                        </div>





                        <div class="span2 responsive" data-tablet="span3" data-desktop="span2">

                            <div class="circle-stat block">

                                <div class="visual">

                                    <div class="circle-state-icon">

                                        <i class="icon-bar-chart blue-color"></i>

                                    </div>

                                    <input class="knob" data-width="100" data-height="100" data-displayPrevious=true  data-thickness=".2" value="25" data-fgColor="#93c4e4" data-bgColor="#ddd"/>

                                </div>

                                <div class="details">

                                    <div class="number">278</div>

                                    <div class="title">CRA</div>

                                </div>



                            </div>

                        </div>

                    </div>

                    <!-- END OVERVIEW STATISTIC BLOCKS-->


                            </div>

                        </div>

                    </div>
<div class="row-fluid">

                <div class="span12">

                    <!-- BEGIN EXAMPLE TABLE widget-->

                    <div class="widget">

                        <div class="widget-title">

                            <h4><i class="icon-reorder"></i>Ajouter mot clé</h4>
                        </div>

                        <div class="widget-body">

                            <div class="portlet-body">

                                <div class="clearfix">

                                    <div class="btn-group">

                                        <button id="sample_editable_1_new" class="btn green">

                                            Ajouter nouveau mot clé <i class="icon-plus"></i>

                                        </button>

                                    </div>

		<div class="pull-right search-wrap">

                    

                            </div>

                                </div>

                                <div class="space15"></div>

                                <table class="table table-striped table-hover table-bordered" id="sample_editable_1">

                                    <thead>

                                    <tr>

                                        <th>Mot-clé</th>

                                        <th>Date de création</th>

                                        <th>Editer</th>

                                        <th>Supprimer</th>

                                    </tr>

                                    </thead>

                                    <tbody>

                                    <tr class="">

                                        <td>Java</td>

                                        <td>23-04-2015</td>

                                        <td><a class="edit" href="javascript:;">Editer</a></td>

                                        <td><a class="delete" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    <tr class="">

                                        <td>PHP</td>

                                        <td>23-04-2015</td>                           

                                        <td><a class="editer" href="javascript:;">Editer</a></td>

                                        <td><a class="supprimer" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    <tr class="">

                                        <td>HTML</td>

                                        <td> 23-04-2015</td>

                                        <td><a class="edit" href="javascript:;">Editer</a></td>

                                        <td><a class="delete" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    <tr class="">

                                        <td>C++</td>

                                        <td>23-04-2015</td>
                                       <td><a class="edit" href="javascript:;">Editer</a></td>

                                        <td><a class="delete" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    <tr class="">

                                        <td>python</td>

                                        <td>23-04-2015</td>
                                        <td><a class="edit" href="javascript:;">Editer</a></td>

                                        <td><a class="delete" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    <tr class="">

                                        <td>SQL</td>

                                        <td>23-04-2015</td>
                                        <td><a class="edit" href="javascript:;">Editer</a></td>

                                        <td><a class="delete" href="javascript:;">Supprimer</a></td>

                                    </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div></div></div></div>
