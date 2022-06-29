<footer>
    <div class="grid-footer">
        <div class="brand-footer">
            <div class="brandcopyright">
                <img src="https://onyos.fr/img/logo-cuisinella-site.png" height="60px" width="auto" alt="">
                <p class="copyright-text">© 2022 | Version 1.3</p>
                <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><!---Cette œuvre est mise à disposition selon les termes de la <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licence Creative Commons Attribution - Pas d&#39;Utilisation Commerciale - Pas de Modification 4.0 International</a>. -->

            </div>
        </div>
        <div class="pages-footer">
            <h4 class="footer-title">Pages</h4>
            <ul class="footer-ul">
                <a class="footer-link" href="https://onyos.fr/">
                    <li class="footer-list">Accueil</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/form.php">
                    <li class="footer-list">SAV</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/news.php">
                    <li class="footer-list">Cuisinell'Actu</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/docs.php">
                    <li class="footer-list">Documentation</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/discover.php">
                    <li class="footer-list intranetv13">Intranet 1.3</li>
                </a>
            </ul>
        </div>
        <div class="dashboard-footer">
            <h4 class="footer-title">Dashboards</h4>
            <ul class="footer-ul">
                <a class="footer-link" href="https://dashboard.onyos.fr">
                    <li class="footer-list">Dashboard Admin</li>
                </a>
                <a class="footer-link" href="https://vendeur.onyos.fr/">
                    <li class="footer-list">Accès Vendeurs</li>
                </a>
                <a class="footer-link" href="https://vendeur.onyos.fr/changelog.php">
                    <li class="footer-list">Changelog</li>
                </a>
                <a class="footer-link" href="https://github.com/">
                    <li class="footer-list">GitHub</li>
            </ul>
        </div>
        <div class="docs-footer-one">
            <h4 class="footer-title">Documentation</h4>
            <ul class="footer-ul">
                <a class="footer-link" href="https://onyos.fr/docs/learn-input.php">
                    <li class="footer-list">Formulaire</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/docs/cuisinellactu.php">
                    <li class="footer-list">Cuisinell'Actu</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/docs/ar-number.php">
                    <li class="footer-list">AR</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/docs/soon">
                    <li class="footer-list">Codage</li>
            </ul>
        </div>
        <div class="docs-footer-two">
            <h4 class="footer-title">Tutoriels</h4>
            <ul class="footer-ul">
                <a class="footer-link" href="https://onyos.fr/docs/pc-side/bookmark.php">
                    <li class="footer-list">Raccourcis</li>
                </a>
                <a class="footer-link" href="leolesimple@onyos.fr">
                    <li class="footer-list">Contact</li>
                </a>
                <a class="footer-link" href="https://leolesimple.notion.site/Mentions-L-gales-6f8a33a3388d4ef9a80a7f3acba3a507">
                    <li class="footer-list">Légal</li>
                </a>
                <a class="footer-link" href="https://onyos.fr/docs/figma.php ">
                    <li class="footer-list">Design System</li>
            </ul>
        </div>
      </div>
</footer>

<style>
:root{
    --footer-link-color:#111;
    --footer-link-hover-color:rgb(30, 30, 30);
}
[data-theme=dark]{
    --footer-link-color:rgb(223, 223, 223);
    --footer-link-hover-color:rgb(190, 184, 184);
}
/* Footer */
.grid-footer {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 0.8fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "brand-footer brand-footer brand-footer brand-footer"
    "pages-footer dashboard-footer docs-footer-one docs-footer-two";
}

.brand-footer { grid-area: brand-footer; text-align:center;}

.pages-footer { grid-area: pages-footer; }

.dashboard-footer { grid-area: dashboard-footer; }

.docs-footer-one { grid-area: docs-footer-one; }

.docs-footer-two { grid-area: docs-footer-two; }

.brandcopyright{
    height: 94px !important;
    margin-top: auto !important;
    margin-bottom: auto !important;
}
.copyright-text{
    font-size: 16px;
    font-weight: 700;
    color: rgb(115, 112, 112);
}
.footer-title{
    font-size: 20px;
    margin-bottom: 0 !important;
    text-align: center !important;
}
.footer-link{
    text-decoration: none !important;
    margin-top:5px !important;
    color: var(--footer-link-color);
}
.footer-link:hover{
    color: var(--footer-link-hover-color);
    transition: all .5s;
}
.footer-list{
    list-style: none !important;
    margin-top: 5px;
}
.footer-ul{
    padding-left: 0 !important;
    text-align: center !important;
}
@media screen and (max-width:900px) {
        .grid-footer {  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
  gap: 0px 0px;
  grid-auto-flow: row;
  grid-template-areas:
    "brand-footer brand-footer brand-footer brand-footer"
    "pages-footer pages-footer pages-footer pages-footer"
    "dashboard-footer dashboard-footer dashboard-footer dashboard-footer"
    "docs-footer-one docs-footer-one docs-footer-one docs-footer-one"
    "docs-footer-two docs-footer-two docs-footer-two docs-footer-two";
}

.brand-footer { grid-area: brand-footer; }

.dashboard-footer { grid-area: dashboard-footer; }

.docs-footer-one { grid-area: docs-footer-one; }

.docs-footer-two { grid-area: docs-footer-two; }

.pages-footer { grid-area: pages-footer; }
}
</style>