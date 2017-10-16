<?php

$redirects = [
    "73" => "/dotnet/2013/10/29/setting-a-culture-for-all-threads-in-an-application.html",
    "71" => "/dotnet/2011/03/02/alternatives-to-dotnet-reflector.html",
    "70" => "/fsharp/2010/09/20/fsharp-links.html",
    "66" => "/resharper/2010/06/10/temporarily-disabling-resharper.html",
    "64" => "/windows/2009/10/29/extracting-msi-files-revisited.html",
    "62" => "/msdn/2009/07/07/msdn-lightweight-view.html",
    "61" => "/msdn/2009/04/08/msdn-low-bandwidth-view.html",
    "60" => "/sql-server/2008/12/23/sql-server-sp3-released.html",
    "59" => "/diagnostics/2008/07/08/useful-daignostics-tools.html",
    "58" => "/windows/2008/06/25/setting-a-proxy-server-for-windows-updates-on-windows-vista.html",
    "57" => "/sql-server/2008/06/08/preventing-accidental-schema-changes-to-the-master-database.html",
    "56" => "/visual-studio/2008/05/28/box-selection-in-visual-studio.html",
    "54" => "/firefox/2008/03/27/blinking-cursor-in-firefox.html",
    "50" => "/visual-studio/2007/10/18/building-solutions-without-visual-studio.html",
    "49" => "/browsers/2007/09/25/browser-toolbars-for-web-development.html",
    "47" => "/sql-server/2007/07/17/fixing-database-logins-after-a-restore.html",
    "46" => "/dotnet/2007/05/01/running-the-output-clause-from-csharp.html",
    "45" => "/dotnet/2007/04/24/windows-and-dotnet-framework-default-versions.html",
    "44" => "/dotnet/2007/04/23/assemblyfileversion-compiler-warning.html",
    "43" => "/windows/2007/03/27/the-difference-between-format-and-quick-format.html",
    "42" => "/dotnet/2007/03/19/csharp-data-types-and-other-language-featrures.html",
    "41" => "/windows/2007/03/08/accessing-network-file-shares-from-a-command-prompt.html",
    "40" => "/website/2007/03/06/google-page-rank-and-redirection.html",
    "39" => "/dotnet/2007/03/05/ambiguous-match-found.html",
    "38" => "/windows/2007/02/08/selecting-no-to-all-in-a-confirm-file-replace-dialog-box.html",
    "35" => "/dotnet/2007/02/08/testing-applications-in-different-cultures.html",
    "34" => "/dotnet/2006/12/19/running-applications-on-different-versions-of-the-dotnet-framework.html",
    "33" => "/dotnet/2006/12/19/managed-stack-explorer.html",
    "30" => "/dotnet/2006/08/23/suppressing-fxcop-messages.html",
    "29" => "/aspnet/2006/07/10/aspnet-development-helper-for-ie.html",
    "27" => "/dotnet/2006/07/10/guidance-explorer.html",
    "26" => "/dotnet/2006/07/10/dotnet-20-installation.html",
    "25" => "/dotnet/2006/07/10/serializationexception-and-system-data-sqlclient-sqlerror.html",
    "24" => "/sql-server/2006/07/10/the-perils-of-sp_rename.html",
    "21" => "/dotnet/2006/06/30/windows-forms-and-the-designmode-property.html",
    "20" => "/windows/2006/06/29/extracting-msi-files.html",
    "19" => "/sql-server/2006/06/29/setting-a-null-field-in-sql-server-management-studio.html",
    "18" => "/dotnet/visual-studio/2006/06/29/microsoft-icons.html",
    "17" => "/dotnet/2006/06/21/sharing-strong-name-keys-across-multiple-projects-in-vs2005.html",
    "16" => "/sql-server/2006/06/21/sql-server-system-table-map.html",
    "15" => "/dotnet/visual-studio/2006/06/20/visual-studio-2005-and-proxy-authentication.html",
    "12" => "/dotnet/2006/06/14/fusion-log-viewer.html",
    "11" => "/dotnet/2006/06/14/system-diagnostics-process-and-speed.html",
    "10" => "/windows/2006/06/14/dns-error-when-adding-a-computer-to-a-domain.html",
    "7" => "/websites/2006/06/13/cats-game.html",
    "4" => "/dotnet/2006/06/12/security-applications-break-dotnet-remoting.html",
    "3" => "/aspnet/2006/06/09/aspnet-20-web-application-project-error.html"
];

if (isset($_GET['p'])) {
    $postUrl = $redirects[$_GET['p']];
    
    if ($postUrl != '') {
        //header("HTTP/1.1 301 Moved Permanently"); 
        header("Location: https://blog.adrianbanks.co.uk" . $postUrl); 
    }
    else {
        header("Location: https://blog.adrianbanks.co.uk"); 
    }
}
else {
    header("Location: https://blog.adrianbanks.co.uk"); 
}
?>
