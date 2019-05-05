<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/index.html.twig */
class __TwigTemplate_ef9aafeda312f9b9df0ab3f516c4e639a47a36689a8406c624101b39acc2aefc extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Earnings (Monthly)</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Earnings (Annual)</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks</div>
                      <div class=\"row no-gutters align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm mr-2\">
                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Pending Requests</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class=\"row\">

            <!-- Area Chart -->
            <div class=\"col-xl-8 col-lg-7\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                  <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                      <div class=\"dropdown-header\">Dropdown Header:</div>
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class=\"col-xl-4 col-lg-5\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                  <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                      <div class=\"dropdown-header\">Dropdown Header:</div>
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                  </div>
                  <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Content Column -->
            <div class=\"col-lg-6 mb-4\">

              <!-- Project Card Example -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                </div>
                <div class=\"card-body\">
                  <h4 class=\"small font-weight-bold\">Server Migration <span class=\"float-right\">20%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Sales Tracking <span class=\"float-right\">40%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Customer Database <span class=\"float-right\">60%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Payout Details <span class=\"float-right\">80%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Account Setup <span class=\"float-right\">Complete!</span></h4>
                  <div class=\"progress\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                </div>
              </div>

              <!-- Color System -->
              <div class=\"row\">
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-primary text-white shadow\">
                    <div class=\"card-body\">
                      Primary
                      <div class=\"text-white-50 small\">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-success text-white shadow\">
                    <div class=\"card-body\">
                      Success
                      <div class=\"text-white-50 small\">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-info text-white shadow\">
                    <div class=\"card-body\">
                      Info
                      <div class=\"text-white-50 small\">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-warning text-white shadow\">
                    <div class=\"card-body\">
                      Warning
                      <div class=\"text-white-50 small\">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-danger text-white shadow\">
                    <div class=\"card-body\">
                      Danger
                      <div class=\"text-white-50 small\">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-secondary text-white shadow\">
                    <div class=\"card-body\">
                      Secondary
                      <div class=\"text-white-50 small\">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class=\"col-lg-6 mb-4\">

              <!-- Illustrations -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                </div>
                <div class=\"card-body\">
                  <div class=\"text-center\">
                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"img/undraw_posting_photo.svg\" alt=\"\">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                </div>
                <div class=\"card-body\">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class=\"mb-0\">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}

    

        <!-- Begin Page Content -->
        <div class=\"container-fluid\">

          <!-- Page Heading -->
          <div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
            <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
            <a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\"><i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-primary shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Earnings (Monthly)</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$40,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-success shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Earnings (Annual)</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">\$215,000</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-info shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Tasks</div>
                      <div class=\"row no-gutters align-items-center\">
                        <div class=\"col-auto\">
                          <div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">50%</div>
                        </div>
                        <div class=\"col\">
                          <div class=\"progress progress-sm mr-2\">
                            <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 50%\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class=\"col-xl-3 col-md-6 mb-4\">
              <div class=\"card border-left-warning shadow h-100 py-2\">
                <div class=\"card-body\">
                  <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                      <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Pending Requests</div>
                      <div class=\"h5 mb-0 font-weight-bold text-gray-800\">18</div>
                    </div>
                    <div class=\"col-auto\">
                      <i class=\"fas fa-comments fa-2x text-gray-300\"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->

          <div class=\"row\">

            <!-- Area Chart -->
            <div class=\"col-xl-8 col-lg-7\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                  <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                      <div class=\"dropdown-header\">Dropdown Header:</div>
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pie Chart -->
            <div class=\"col-xl-4 col-lg-5\">
              <div class=\"card shadow mb-4\">
                <!-- Card Header - Dropdown -->
                <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                  <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
                      <div class=\"dropdown-header\">Dropdown Header:</div>
                      <a class=\"dropdown-item\" href=\"#\">Action</a>
                      <a class=\"dropdown-item\" href=\"#\">Another action</a>
                      <div class=\"dropdown-divider\"></div>
                      <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                  </div>
                </div>
                <!-- Card Body -->
                <div class=\"card-body\">
                  <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                  </div>
                  <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                    <span class=\"mr-2\">
                      <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class=\"row\">

            <!-- Content Column -->
            <div class=\"col-lg-6 mb-4\">

              <!-- Project Card Example -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
                </div>
                <div class=\"card-body\">
                  <h4 class=\"small font-weight-bold\">Server Migration <span class=\"float-right\">20%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Sales Tracking <span class=\"float-right\">40%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Customer Database <span class=\"float-right\">60%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Payout Details <span class=\"float-right\">80%</span></h4>
                  <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                  <h4 class=\"small font-weight-bold\">Account Setup <span class=\"float-right\">Complete!</span></h4>
                  <div class=\"progress\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                  </div>
                </div>
              </div>

              <!-- Color System -->
              <div class=\"row\">
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-primary text-white shadow\">
                    <div class=\"card-body\">
                      Primary
                      <div class=\"text-white-50 small\">#4e73df</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-success text-white shadow\">
                    <div class=\"card-body\">
                      Success
                      <div class=\"text-white-50 small\">#1cc88a</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-info text-white shadow\">
                    <div class=\"card-body\">
                      Info
                      <div class=\"text-white-50 small\">#36b9cc</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-warning text-white shadow\">
                    <div class=\"card-body\">
                      Warning
                      <div class=\"text-white-50 small\">#f6c23e</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-danger text-white shadow\">
                    <div class=\"card-body\">
                      Danger
                      <div class=\"text-white-50 small\">#e74a3b</div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6 mb-4\">
                  <div class=\"card bg-secondary text-white shadow\">
                    <div class=\"card-body\">
                      Secondary
                      <div class=\"text-white-50 small\">#858796</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class=\"col-lg-6 mb-4\">

              <!-- Illustrations -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
                </div>
                <div class=\"card-body\">
                  <div class=\"text-center\">
                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\"img/undraw_posting_photo.svg\" alt=\"\">
                  </div>
                  <p>Add some quality, svg illustrations to your project courtesy of <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                  <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on unDraw &rarr;</a>
                </div>
              </div>

              <!-- Approach -->
              <div class=\"card shadow mb-4\">
                <div class=\"card-header py-3\">
                  <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
                </div>
                <div class=\"card-body\">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class=\"mb-0\">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->


{% endblock %}
", "dashboard/index.html.twig", "/srv/http/symfony/adminTEP/templates/dashboard/index.html.twig");
    }
}
