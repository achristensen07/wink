<!DOCTYPE html>
<html>
<head>
<meta property="og:description" content="Wink, an alternative web browser for Windows ;)" />
</head>
<body>
<center><h1>Welcome to WinkBrowser.org</h1>
<div style="left:50%;font-size:50px;">;&nbsp;)<div>
</center>
<p>Wink Browser is an internet browser for Windows based on the WinCairo port of WebKit.</p>

<p>Here are the terms of the license:</p>
<p>
THIS SOFTWARE IS PROVIDED BY WINKBROWSER.ORG AND ITS CONTRIBUTORS ``AS IS'' AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL WINKBROWSER.ORG OR ITS CONTRIBUTORS BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</p>

<p>Click <a href="WinkInstaller.msi">here</a> to accept the terms of the license and download Wink Browser.  Run the installer and open Wink using the shortcut it puts on your desktop.  You will need Windows Vista or later to run Wink Browser successfully.</p>
<p>If you want to watch YouTube in Wink Browser 1.0.1, you'll have to click <a href="http://get.adobe.com/flashplayer/otherversions/">here</a> to download Flash.</p>

<p>I know this website looks like it was made by a third grader in the 1990's, but it'll get nicer when this gets big. Check back occasionally for updates!</p>

<?php
function countHits($name) {
    $filename = '../data/counters/'.$name;
    $count = (int)file_get_contents($filename);
    file_put_contents($filename,$count+1);
    return $count;
}
countHits('index');
file_put_contents('../data/iplogs/index',$_SERVER["REMOTE_ADDR"]."\n",FILE_APPEND|LOCK_EX);
?>
</body>
</html>
