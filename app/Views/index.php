<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Tutorial</title>
    <style>
             *{
            font-family: "Arial", sans-serif; 
        }
 body {
    font-family: "Arial", sans-serif;
    margin: 0;
    display: flex;
    background-color: #1e203d;
    color: white;
    height: 100vh;
    overflow: hidden;
}

.sidebar {
    background-color: #151961;
    height: 100vh;
    width: 20%;
    padding: 20px;
    overflow-y: auto;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.3);
    transition: width 0.3s ease-in-out;
    position: fixed;
    left: -100%;
}

.sidebar.open {
    left: 0;
}

.sidebar h1 {
    font-size: 24px;
    color: white;
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    padding: 0;
    margin: 0;
    list-style-type: none;
}

.container {
    width: 80%;
    padding-left: 20%;
    display: flex;
    flex-direction: column;
}

.nav-link {
    display: block;
    color: white;
    padding: 12px;
    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 10px;
    background-color: #696fec;
    font-weight: 500;
    transition: background-color 0.3s ease, padding-left 0.2s;
}

.nav-link.active {
    background-color: #1e203d;
    font-weight: bold;
}

.nav-link:hover {
    background-color: #1e203d;
    padding-left: 20px;
}

.content {
    padding: 40px;
    width: 100%;
    background-color: #f9f9f9;
    color: #1e203d;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow-y: auto;
    max-height: calc(100vh - 80px);
    padding-left: 5%;
}

.btn-prev, .btn-next {
    background-color: #696fec;
    color: white;
    padding: 12px 20px;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-prev:hover, .btn-next:hover {
    background-color: #1e203d;
}

h1, h3 {
    margin-top: 0;
    font-size: 2rem;
}

h2, h4, h5 {
    font-size: 1.5rem;
}

pre code {
    display: block;
    background-color: #1e203d;
    color: #ffffff;
    padding: 15px;
    border-radius: 5px;
    overflow-x: auto;
}

.hidden {
    display: none;
}

@media (max-width: 768px) {
    body {
        flex-direction: column;
        overflow-x: hidden;
    }
    .content {
        padding-left: 0;
        width: 100%;
        order: 2;
        padding: 20px;
    }

    .sidebar {
        width: 70%;
        height: 100vh;
        position: fixed;
        top: 0;
        left: -100%;
        z-index: 1000;
        overflow-y: auto;
        transition: left 0.3s ease-in-out;
    }

    .sidebar.open {
        left: 0;
    }

    .menu-icon {
        display: block;
        cursor: pointer;
        font-size: 30px;
        padding: 10px;
        background: none;
        border: none;
        color: white;
        z-index: 1001;
    }
}

@media (min-width: 769px) {
    .menu-icon {
        display: none;
    }

    .sidebar {
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        overflow-y: auto;
    }

    .content {
        width: 80%;
        margin-left: 20%;
    }
}

table {
    width: 100%;
    border-collapse: collapse;
    background-color: #1e203d;
}

th {
    background-color: #151961;
    color: white;
    padding: 10px;
    text-align: left;
}

td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
    background-color: white;
}

td, th {
    word-wrap: break-word;
}
</style>

    
</head>
<body>
    <div class="menu-icon" id="menu-icon">☰</div>
    <div class="sidebar">
        <h1 class="fw-bold">JS Tutorial</h1>
        <ul class="nav flex-column">
            <li><a class="nav-link active" href="#home">JS HOME</a></li>
            <li><a class="nav-link" href="#intro">JS Introduction</a></li>
            <li><a class="nav-link" href="#where-to">JS Where To</a></li>
            <li><a class="nav-link" href="#output">JS Output</a></li>
            <li><a class="nav-link" href="#statements">JS Statements</a></li>
            <li><a class="nav-link" href="#syntax">JS Syntax</a></li>
            <li><a class="nav-link" href="#comments">JS Comments</a></li>
            <li><a class="nav-link" href="#variables">JS Variables</a></li>
            <li><a class="nav-link" href="#let">JS Let</a></li>
            <li><a class="nav-link" href="#const">JS Const</a></li>
            <li><a class="nav-link" href="#operators">JS Operators</a></li>
            <li><a class="nav-link" href="#arithmetic">JS Arithmetic</a></li>
            <li><a class="nav-link" href="#assignment">JS Assignment</a></li>
            <li><a class="nav-link" href="#data-types">JS Data Types</a></li>
            <li><a class="nav-link" href="#functions">JS Functions</a></li>
            <li><a class="nav-link" href="#objects">JS Objects</a></li>
            <li><a class="nav-link" href="#object-properties">JS Object Properties</a></li>
            <li><a class="nav-link" href="#object-methods">JS Object Methods</a></li>
            <li><a class="nav-link" href="#object-display">JS Object Display</a></li>
            <li><a class="nav-link" href="#object-constructors">JS Object Constructors</a></li>
            <li><a class="nav-link" href="#events">JS Events</a></li>
            <li><a class="nav-link" href="#strings">JS Strings</a></li>
            <li><a class="nav-link" href="#string-methods">JS String Methods</a></li>
            <li><a class="nav-link" href="#string-search">JS String Search</a></li>
            <li><a class="nav-link" href="#string-templates">JS String Templates</a></li>
            <li><a class="nav-link" href="#numbers">JS Numbers</a></li>
            <li><a class="nav-link" href="#bigint">JS BigInt</a></li>
            <li><a class="nav-link" href="#number-methods">JS Number Methods</a></li>
            <li><a class="nav-link" href="#number-properties">JS Number Properties</a></li>
            <li><a class="nav-link" href="#arrays">JS Arrays</a></li>
            <li><a class="nav-link" href="#array-methods">JS Array Methods</a></li>
            <li><a class="nav-link" href="#array-search">JS Array Search</a></li>
            <li><a class="nav-link" href="#array-sort">JS Array Sort</a></li>
            <li><a class="nav-link" href="#array-iteration">JS Array Iteration</a></li>
            <li><a class="nav-link" href="#array-const">JS Array Const</a></li>
            <li><a class="nav-link" href="#dates">JS Dates</a></li>
            <li><a class="nav-link" href="#date-formats">JS Date Formats</a></li>
            <li><a class="nav-link" href="#date-get-methods">JS Date Get Methods</a></li>
            <li><a class="nav-link" href="#date-set-methods">JS Date Set Methods</a></li>
            <li><a class="nav-link" href="#math">JS Math</a></li>
            <li><a class="nav-link" href="#random">JS Random</a></li>
            <li><a class="nav-link" href="#booleans">JS Booleans</a></li>
            <li><a class="nav-link" href="#comparisons">JS Comparisons</a></li>
            <li><a class="nav-link" href="#if-else">JS If Else</a></li>
            <li><a class="nav-link" href="#switch">JS Switch</a></li>
            <li><a class="nav-link" href="#loop-for">JS Loop For</a></li>
            <li><a class="nav-link" href="#loop-for-in">JS Loop For In</a></li>
            <li><a class="nav-link" href="#loop-for-of">JS Loop For Of</a></li>
            <li><a class="nav-link" href="#loop-while">JS Loop While</a></li>
            <li><a class="nav-link" href="#break">JS Break</a></li>
            <li><a class="nav-link" href="#iterables">JS Iterables</a></li>
            <li><a class="nav-link" href="#sets">JS Sets</a></li>
            <li><a class="nav-link" href="#set-methods">JS Set Methods</a></li>
            <li><a class="nav-link" href="#maps">JS Maps</a></li>
            <li><a class="nav-link" href="#map-methods">JS Map Methods</a></li>
            <li><a class="nav-link" href="#typeof">JS Typeof</a></li>
            <li><a class="nav-link" href="#type-conversion">JS Type Conversion</a></li>
            <li><a class="nav-link" href="#destructuring">JS Destructuring</a></li>
            <li><a class="nav-link" href="#bitwise">JS Bitwise</a></li>
            <li><a class="nav-link" href="#regexp">JS RegExp</a></li>
            <li><a class="nav-link" href="#precedence">JS Precedence</a></li>
            <li><a class="nav-link" href="#scope">JS Scope</a></li>
            <li><a class="nav-link" href="#hoisting">JS Hoisting</a></li>
            <li><a class="nav-link" href="#strict-mode">JS Strict Mode</a></li>
            <li><a class="nav-link" href="#this-keyword">JS this Keyword</a></li>
            <li><a class="nav-link" href="#arrow-function">JS Arrow Function</a></li>
            <li><a class="nav-link" href="#classes">JS Classes</a></li>
            <li><a class="nav-link" href="#modules">JS Modules</a></li>
            <li><a class="nav-link" href="#json">JS JSON</a></li>
            <li><a class="nav-link" href="#debugging">JS Debugging</a></li>
            <li><a class="nav-link" href="#style-guide">JS Style Guide</a></li>
            <li><a class="nav-link" href="#best-practices">JS Best Practices</a></li>
            <li><a class="nav-link" href="#mistakes">JS Mistakes</a></li>
            <li><a class="nav-link" href="#performance">JS Performance</a></li>
            <li><a class="nav-link" href="#reserved-words">JS Reserved Words</a></li>
        </ul>
    </div>
    
      

    

    <section id="home" class="content hidden">
        <header>
            <h1>Tutorial JavaScript</h1>
            <p>Pelajari JavaScript dengan mudah dan cepat!</p>
        </header>
        <h1>Kenapa Belajar JavaScript?</h1>
        <p>JavaScript adalah salah satu dari tiga bahasa utama yang wajib dikuasai oleh semua pengembang web:</p>
        <ul>
            <li><strong>HTML</strong> - Untuk mendefinisikan konten halaman web.</li>
            <li><strong>CSS</strong> - Untuk menentukan tata letak halaman web.</li>
            <li><strong>JavaScript</strong> - Untuk memprogram perilaku halaman web, seperti animasi, validasi form, dan perubahan konten dinamis.</li>
        </ul>

        <h2>Apa yang Akan Anda Pelajari dalam Tutorial Ini?</h2>
        <p>Dalam tutorial ini, Anda akan mempelajari dasar-dasar hingga topik lanjutan JavaScript. Anda akan menemukan banyak contoh yang dapat dicoba langsung di browser.</p>

        <h2>Fitur Utama Tutorial Ini:</h2>
        <ul>
            <li><strong>Belajar dengan Contoh:</strong> Setiap bab dilengkapi dengan contoh kode yang bisa Anda edit dan coba langsung.</li>
            <li><strong>Struktur Tutorial Teratur:</strong> Mulai dari dasar, berlanjut ke topik yang lebih rumit.</li>
            <li><strong>Praktik Langsung:</strong> Berlatih menulis kode dengan langsung mengedit dan menjalankan contoh yang ada.</li>
        </ul>

        <h2>Sejarah JavaScript</h2>
        <p>JavaScript telah mengalami beberapa versi penting sejak diluncurkan, antara lain:</p>
        <ul>
            <li><strong>ES1, ES2, dan ES3</strong> (1997-1999) - Versi pertama JavaScript.</li>
            <li><strong>ES5</strong> (2009) - Revisi besar yang memperkenalkan banyak fitur baru.</li>
            <li><strong>ES6</strong> (2015) - Menambahkan fitur seperti let, const, dan class.</li>
            <li><strong>Pembaruan Tahunan</strong> (2016-2022) - Pembaruan dengan penambahan fitur baru setiap tahun.</li>
        </ul>

        <h2>Cara Belajar JavaScript</h2>
        <p>Kecepatan belajar dalam tutorial ini tergantung pada Anda. Anda bisa memilih untuk belajar sesuai waktu dan kecepatan Anda sendiri. Hal terpenting adalah terus berlatih dan mencoba berbagai contoh untuk memperdalam pemahaman Anda.</p>

        <h2>JavaScript di Browser Anda</h2>
        <p>JavaScript sudah tersedia di browser Anda, baik di komputer, tablet, atau smartphone. Anda tidak perlu mengunduhnya karena sudah disertakan dalam browser modern.</p>

        <h2>Referensi JavaScript</h2>
        <p>W3Schools menyediakan referensi lengkap untuk JavaScript, termasuk objek HTML dan browser. Referensi ini terus diperbarui sesuai standar web terbaru.</p>

        <h2>Kesimpulan</h2>
        <p>Dengan mengikuti tutorial ini, Anda akan dapat mempelajari JavaScript secara mendalam dan menerapkannya dalam pembuatan aplikasi web yang interaktif dan dinamis. Jangan lupa untuk terus berlatih dengan contoh-contoh yang ada agar kemampuan Anda semakin meningkat!</p>
<br>
<a href="#basic" class="btn-prev">&larr; Previous</a>
        <a href="#attributes" class="btn-next">Next &rarr;</a>
    </section>

    <section id="intro" class="content hidden">
        <h1>Penjelasan Mengenai JavaScript</h1>
    
    <p>Berikut adalah penjelasan mengenai beberapa hal yang dapat dilakukan oleh JavaScript dalam mengubah konten, atribut, dan gaya (style) HTML.</p>

    <h2>JavaScript Dapat Mengubah Konten HTML</h2>
    <p>Salah satu metode JavaScript yang sering digunakan untuk mengubah konten HTML adalah <code>getElementById()</code>. Dengan metode ini, kita dapat memilih elemen HTML berdasarkan ID dan kemudian mengubah kontennya.</p>
    <p>Misalnya, jika kita memiliki elemen HTML dengan ID <code>demo</code> dan ingin mengubah kontennya menjadi "Hello JavaScript", kita bisa menggunakan kode berikut:</p>
    <pre><code>document.getElementById("demo").innerHTML = "Hello JavaScript";</code></pre>
    <p>Selain menggunakan tanda kutip ganda (<code>"</code>), JavaScript juga menerima tanda kutip tunggal (<code>'</code>), seperti contoh berikut:</p>
    <pre><code>document.getElementById('demo').innerHTML = 'Hello JavaScript';</code></pre>

    <h2>JavaScript Dapat Mengubah Nilai Atribut HTML</h2>
    <p>JavaScript juga dapat mengubah nilai atribut HTML. Sebagai contoh, kita bisa mengubah atribut <code>src</code> pada tag <code>&lt;img&gt;</code> untuk mengganti gambar yang ditampilkan di halaman web.</p>
    <p>Contoh kasus: Jika kita memiliki elemen gambar dan ingin mengganti gambar sumbernya (misalnya dari "lampu_mati.png" ke "lampu_hidup.png"), kita bisa menggunakan JavaScript untuk mengubah atribut <code>src</code> gambar tersebut.</p>
    <pre><code>document.getElementById("myImage").src = "lampu_hidup.png";</code></pre>

    <h2>JavaScript Dapat Mengubah Gaya (CSS) HTML</h2>
    <p>Selain mengubah konten dan atribut HTML, JavaScript juga dapat mengubah gaya (CSS) elemen HTML. Misalnya, kita bisa mengubah ukuran font dari elemen tertentu dengan kode berikut:</p>
    <pre><code>document.getElementById("demo").style.fontSize = "35px";</code></pre>
    <p>Dengan kode ini, ukuran font teks dalam elemen dengan ID <code>demo</code> akan berubah menjadi 35 piksel.</p>

    <h2>JavaScript Dapat Menyembunyikan Elemen HTML</h2>
    <p>JavaScript dapat menyembunyikan elemen HTML dengan mengubah gaya tampilannya (<code>display</code>) menjadi "none". Ini berarti elemen tersebut tidak akan ditampilkan di halaman.</p>
    <pre><code>document.getElementById("demo").style.display = "none";</code></pre>
    <p>Dengan kode ini, elemen dengan ID <code>demo</code> akan disembunyikan.</p>

    <h2>JavaScript Dapat Menampilkan Kembali Elemen HTML</h2>
    <p>Selain menyembunyikan, JavaScript juga dapat menampilkan kembali elemen yang sebelumnya disembunyikan. Ini dilakukan dengan mengubah gaya tampilannya menjadi "block", sehingga elemen tersebut akan muncul kembali di halaman.</p>
    <pre><code>document.getElementById("demo").style.display = "block";</code></pre>

    <h2>Fakta Menarik tentang JavaScript</h2>
    <ul>
        <li><strong>JavaScript dan Java adalah dua bahasa yang berbeda:</strong> Meskipun namanya mirip, JavaScript dan Java adalah dua bahasa pemrograman yang sangat berbeda, baik dalam konsep maupun desainnya.</li>
        <li><strong>Sejarah JavaScript:</strong> JavaScript ditemukan oleh Brendan Eich pada tahun 1995. Bahasa ini kemudian menjadi standar ECMA pada tahun 1997. Nama resmi standar ini adalah ECMA-262, dan nama resmi bahasa ini adalah ECMAScript.</li>
    </ul>

    <p>Dengan penjelasan ini, Anda dapat lebih memahami bagaimana JavaScript digunakan untuk mengubah elemen-elemen HTML, mulai dari konten, atribut, gaya, hingga menyembunyikan dan menampilkan elemen-elemen tersebut.</p>

        <br>
        <a href="Beranda.html" class="btn-prev">&larr; Previous</a>
        <a href="#where-to" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="where-to" class="content hidden">
        <h1>JavaScript di HTML</h1>

<h2>Tag &lt;script&gt;</h2>
<p>Di dalam HTML, kode JavaScript disisipkan antara tag &lt;script&gt; dan &lt;/script&gt;.</p>
<pre><code>&lt;script&gt;
document.getElementById("demo").innerHTML = "My First JavaScript";
&lt;/script&gt;</code></pre>
<p>Pada contoh di atas, JavaScript digunakan untuk mengubah konten elemen dengan id <code>demo</code> menjadi "My First JavaScript".</p>
<p>Beberapa contoh JavaScript lama menggunakan atribut <code>type</code>, seperti <code>&lt;script type="text/javascript"&gt;</code>, tetapi atribut ini sudah tidak diperlukan lagi karena JavaScript adalah bahasa pemrograman default di HTML.</p>

<h2>Fungsi JavaScript dan Peristiwa (Events)</h2>
<p>Fungsi JavaScript adalah blok kode yang dapat dieksekusi ketika dipanggil. Fungsi ini dapat dipanggil oleh berbagai peristiwa, seperti saat pengguna mengklik tombol.</p>
<p>Misalnya, kita dapat membuat fungsi yang dipanggil ketika tombol ditekan, dan fungsi tersebut akan melakukan sesuatu pada halaman, seperti mengubah teks atau menyembunyikan elemen.</p>

<h2>Menempatkan JavaScript di &lt;head&gt; atau &lt;body&gt;</h2>
<p>Anda bisa menempatkan skrip JavaScript di bagian manapun dalam dokumen HTML, baik itu di dalam tag &lt;head&gt;, &lt;body&gt;, atau keduanya.</p>

<h3>JavaScript di dalam &lt;head&gt;</h3>
<p>JavaScript juga dapat diletakkan dalam tag &lt;head&gt;. Contoh di bawah ini menunjukkan bagaimana fungsi JavaScript dapat diletakkan di dalam bagian &lt;head&gt; dan dipanggil saat tombol di klik:</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Demo JavaScript di Head&lt;/h2&gt;
&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;
&lt;button type="button" onclick="myFunction()"&gt;Coba&lt;/button&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<h3>JavaScript di dalam &lt;body&gt;</h3>
<p>JavaScript juga bisa diletakkan di dalam tag &lt;body&gt;. Berikut adalah contoh kode yang sama, tetapi kali ini fungsi JavaScript ditulis di bawah elemen HTML.</p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;h2&gt;Demo JavaScript di Body&lt;/h2&gt;
&lt;p id="demo"&gt;A Paragraph&lt;/p&gt;
&lt;button type="button" onclick="myFunction()"&gt;Coba&lt;/button&gt;
&lt;script&gt;
function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Penting untuk dicatat bahwa menempatkan skrip JavaScript di bawah elemen HTML (di akhir bagian &lt;body&gt;) bisa meningkatkan kecepatan tampilan halaman. Hal ini karena interpretasi skrip JavaScript bisa memperlambat pemuatan halaman jika ditempatkan di atas.</p>

<h2>JavaScript Eksternal</h2>
<p>Skrip JavaScript juga bisa ditempatkan di file eksternal. Ini sangat berguna saat kode JavaScript yang sama digunakan di banyak halaman web.</p>
<p>Contoh file eksternal <code>myScript.js</code>:</p>
<pre><code>function myFunction() {
  document.getElementById("demo").innerHTML = "Paragraph changed.";
}</code></pre>

<p>Untuk menghubungkan file JavaScript eksternal dengan HTML, kita menggunakan tag &lt;script&gt; dan atribut <code>src</code> yang menunjuk ke lokasi file JavaScript.</p>
<pre><code>&lt;script src="myScript.js"&gt;&lt;/script&gt;</code></pre>

<p>File JavaScript eksternal harus berada di direktori yang sesuai dan tidak mengandung tag &lt;script&gt; di dalamnya.</p>

<h2>Keuntungan Menggunakan JavaScript Eksternal</h2>
<ul>
    <li><b>Memisahkan HTML dan kode:</b> Hal ini membuat HTML lebih bersih dan terstruktur.</li>
    <li><b>Memudahkan pemeliharaan:</b> Kode JavaScript menjadi lebih mudah dibaca dan diperbarui jika ditempatkan di file terpisah.</li>
    <li><b>Mempercepat pemuatan halaman:</b> File JavaScript yang di-cache dapat mempercepat pemuatan halaman di kunjungan berikutnya.</li>
</ul>

<h2>Menggunakan Beberapa File JavaScript Eksternal</h2>
<p>Jika Anda memiliki beberapa file JavaScript yang ingin digunakan di satu halaman, Anda dapat menambahkannya menggunakan beberapa tag &lt;script&gt;.</p>
<pre><code>&lt;script src="myScript1.js"&gt;&lt;/script&gt;
&lt;script src="myScript2.js"&gt;&lt;/script&gt;</code></pre>

<h2>Referensi Eksternal</h2>
<p>Anda dapat merujuk file JavaScript eksternal dengan tiga cara berbeda:</p>
<ol>
    <li><b>Menggunakan URL lengkap (alamat web lengkap):</b></li>
    <pre><code>&lt;script src="https://www.example.com/js/myScript.js"&gt;&lt;/script&gt;</code></pre>
    <li><b>Menggunakan jalur file (misalnya /js/):</b></li>
    <pre><code>&lt;script src="/js/myScript.js"&gt;&lt;/script&gt;</code></pre>
    <li><b>Tanpa menggunakan jalur, jika file berada di direktori yang sama:</b></li>
    <pre><code>&lt;script src="myScript.js"&gt;&lt;/script&gt;</code></pre>
</ol>
        <br>
        <a href="#home" class="btn-prev">&larr; Previous</a>
        <a href="#output" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="output" class="content hidden">
        <h1>Output JavaScript dan Kemungkinan Tampilan</h1>

<p>JavaScript dapat menampilkan data dengan berbagai cara, di antaranya:</p>
<ol>
    <li><b>Menulis ke dalam elemen HTML menggunakan <code>innerHTML</code>.</b></li>
    <li><b>Menulis ke output HTML menggunakan <code>document.write()</code>.</b></li>
    <li><b>Menulis ke dalam kotak alert menggunakan <code>window.alert()</code>.</b></li>
    <li><b>Menulis ke dalam konsol browser menggunakan <code>console.log()</code>.</b></li>
</ol>

<p>Berikut penjelasan setiap cara tersebut:</p>

<h2>1. Menggunakan <code>innerHTML</code></h2>
<p>Metode ini memungkinkan kita untuk mengubah atau menampilkan data dalam elemen HTML yang sudah ada. Untuk mengakses elemen HTML, JavaScript menggunakan metode <code>document.getElementById(id)</code>, yang mencari elemen berdasarkan ID-nya. Kemudian, kita bisa mengubah konten elemen tersebut menggunakan properti <code>innerHTML</code>.</p>

<p><b>Contoh:</b></p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My First Paragraph&lt;/p&gt;

&lt;p id="demo"&gt;&lt;/p&gt;

&lt;script&gt;
document.getElementById("demo").innerHTML = 5 + 6;
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Pada contoh di atas, JavaScript mengubah konten elemen dengan ID <code>demo</code> menjadi hasil dari operasi <code>5 + 6</code>, yang menampilkan "11" di halaman web.</p>

<h2>2. Menggunakan <code>document.write()</code></h2>
<p>Metode <code>document.write()</code> memungkinkan kita menulis langsung ke dalam dokumen HTML. Ini lebih sering digunakan untuk tujuan pengujian, tetapi sebaiknya tidak digunakan di halaman produksi karena dapat menghapus seluruh konten jika dipanggil setelah halaman dimuat.</p>

<p><b>Contoh Penggunaan:</b></p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;script&gt;
document.write(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Pada contoh ini, JavaScript menulis hasil operasi <code>5 + 6</code> langsung ke dalam dokumen HTML, yang muncul di layar sebagai "11".</p>

<h2>3. Menggunakan <code>window.alert()</code></h2>
<p><code>window.alert()</code> digunakan untuk menampilkan kotak dialog pop-up dengan pesan tertentu. Kotak ini berguna untuk menunjukkan informasi kepada pengguna.</p>

<p><b>Contoh Penggunaan:</b></p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;h1&gt;My First Web Page&lt;/h1&gt;
&lt;p&gt;My first paragraph.&lt;/p&gt;

&lt;script&gt;
window.alert(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Di sini, sebuah pop-up akan muncul dengan pesan "11", hasil dari operasi <code>5 + 6</code>. Anda juga dapat menulis <code>alert()</code> tanpa kata kunci <code>window</code>, karena <code>window</code> adalah objek global dalam JavaScript.</p>

<h2>4. Menggunakan <code>console.log()</code></h2>
<p><code>console.log()</code> digunakan untuk menampilkan data di konsol browser. Ini sangat berguna saat kita ingin melakukan debugging atau memeriksa nilai dan status program selama pengembangan.</p>

<p><b>Contoh Penggunaan:</b></p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;script&gt;
console.log(5 + 6);
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Di sini, hasil <code>5 + 6</code> (yaitu "11") akan ditampilkan di konsol browser. Anda dapat mengakses konsol ini melalui Developer Tools di browser (biasanya dengan menekan F12 atau klik kanan dan pilih "Inspect").</p>

<h2>5. Menampilkan Halaman dengan Perintah Print</h2>
<p>JavaScript tidak memiliki objek atau metode khusus untuk mencetak halaman secara langsung. Namun, Anda dapat menggunakan metode <code>window.print()</code> untuk mencetak konten halaman web saat ini.</p>

<p><b>Contoh Penggunaan:</b></p>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;button onclick="window.print()"&gt;Print this page&lt;/button&gt;

&lt;/body&gt;
&lt;/html&gt;</code></pre>

<p>Pada contoh ini, ketika tombol diklik, browser akan membuka dialog untuk mencetak halaman yang sedang ditampilkan.</p>

<h2>Kesimpulan</h2>
<p>JavaScript memiliki beberapa cara untuk menampilkan atau mencetak data di halaman web:</p>
<ul>
    <li><b><code>innerHTML</code>:</b> Untuk menulis data ke elemen HTML tertentu.</li>
    <li><b><code>document.write()</code>:</b> Untuk menulis langsung ke dokumen HTML, meskipun ini sebaiknya hanya digunakan untuk pengujian.</li>
    <li><b><code>window.alert()</code>:</b> Untuk menampilkan pesan dalam kotak dialog pop-up.</li>
    <li><b><code>console.log()</code>:</b> Untuk menampilkan data di konsol browser, berguna untuk debugging.</li>
    <li><b><code>window.print()</code>:</b> Untuk mencetak halaman menggunakan browser.</li>
</ul>

<p>Namun, penting untuk diingat bahwa penggunaan <code>document.write()</code> setelah halaman dimuat dapat menyebabkan hilangnya seluruh konten halaman, sehingga sebaiknya hanya digunakan saat pengembangan dan pengujian.</p>

        <br>
        <a href="#where-to" class="btn-prev">&larr; Previous</a>
        <a href="#statements" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="statements" class="content hidden">
        <h1>Pernyataan JavaScript</h1>

<p>Pernyataan dalam JavaScript adalah instruksi yang memberi tahu komputer apa yang harus dilakukan. Dalam konteks JavaScript, pernyataan adalah blok kode yang dieksekusi oleh browser atau mesin JavaScript.</p>

<h2>Contoh Pernyataan JavaScript</h2>
<pre><code>let x, y, z;    // Pernyataan 1
x = 5;          // Pernyataan 2
y = 6;          // Pernyataan 3
z = x + y;      // Pernyataan 4</code></pre>
<p>Di atas, kita mendeklarasikan tiga variabel <code>x</code>, <code>y</code>, dan <code>z</code>, kemudian memberi nilai pada variabel tersebut dan akhirnya menjumlahkan <code>x</code> dan <code>y</code>, dan hasilnya disimpan dalam <code>z</code>.</p>

<h2>Program JavaScript</h2>
<p>Sebuah program komputer adalah daftar dari "instruksi" yang akan dieksekusi oleh komputer. Dalam pemrograman, instruksi ini disebut "pernyataan". Sebuah program JavaScript terdiri dari serangkaian pernyataan yang dieksekusi oleh browser.</p>
<p>Di dalam HTML, program JavaScript dijalankan oleh browser, yang membaca dan mengeksekusi pernyataan-pernyataan tersebut.</p>

<h2>Bagian-Bagian dari Pernyataan JavaScript</h2>
<p>Pernyataan JavaScript terdiri dari beberapa komponen, seperti:</p>
<ol>
    <li><b>Nilai:</b> Angka, string, atau data lain.</li>
    <li><b>Operator:</b> Simbol yang melakukan operasi matematika atau logika.</li>
    <li><b>Ekspresi:</b> Kombinasi nilai dan operator.</li>
    <li><b>Kata Kunci:</b> Kata yang memiliki makna khusus dalam JavaScript, seperti <code>let</code>, <code>var</code>, <code>if</code>, <code>for</code>, dll.</li>
    <li><b>Komentar:</b> Catatan untuk programmer yang tidak dieksekusi oleh JavaScript.</li>
</ol>

<p>Contoh berikut menunjukkan pernyataan JavaScript yang mengubah konten dalam elemen HTML dengan id "demo":</p>
<pre><code>document.getElementById("demo").innerHTML = "Hello Dolly.";</code></pre>
<p>Pernyataan ini memberi tahu browser untuk menulis "Hello Dolly." di dalam elemen HTML yang memiliki id <code>demo</code>.</p>

<h2>Pemisahan Pernyataan dengan Titik Koma (<code>;</code>)</h2>
<p>Titik koma (<code>;</code>) digunakan untuk memisahkan pernyataan dalam JavaScript. Setiap pernyataan harus diakhiri dengan titik koma, meskipun JavaScript masih bisa bekerja tanpa titik koma di akhir, penggunaan titik koma sangat disarankan untuk mencegah masalah di kemudian hari.</p>

<p><b>Contoh:</b></p>
<pre><code>let a, b, c;  // Deklarasi 3 variabel
a = 5;        // Memberikan nilai 5 pada a
b = 6;        // Memberikan nilai 6 pada b
c = a + b;    // Menyimpan hasil penjumlahan a dan b pada c</code></pre>

<p>Kita juga dapat menulis beberapa pernyataan dalam satu baris, yang dipisahkan oleh titik koma:</p>
<pre><code>a = 5; b = 6; c = a + b;</code></pre>

<h2>Spasi Putih dalam JavaScript</h2>
<p>JavaScript mengabaikan spasi berlebih, sehingga Anda bisa menambahkan spasi untuk membuat kode lebih mudah dibaca. Sebagai contoh, berikut dua baris kode yang setara:</p>
<pre><code>let person = "Hege";
let person="Hege";</code></pre>
<p>Namun, penggunaan spasi disarankan di sekitar operator agar kode lebih mudah dibaca:</p>
<pre><code>let x = y + z;</code></pre>

<h2>Panjang Baris dan Pemecahan Baris</h2>
<p>Untuk kemudahan pembacaan, biasanya baris kode dalam JavaScript dibatasi maksimal 80 karakter. Jika sebuah pernyataan tidak muat dalam satu baris, sebaiknya pemecahannya dilakukan setelah operator.</p>

<p><b>Contoh:</b></p>
<pre><code>document.getElementById("demo").innerHTML =
"Hello Dolly!";</code></pre>

<h2>Blok Kode JavaScript</h2>
<p>Pernyataan JavaScript bisa dikelompokkan dalam blok kode, yang dibungkus dengan kurung kurawal <code>{...}</code>. Blok kode digunakan untuk mendefinisikan pernyataan yang akan dieksekusi bersama.</p>
<p>Salah satu contoh penggunaannya adalah dalam fungsi JavaScript:</p>
<pre><code>function myFunction() {
  document.getElementById("demo1").innerHTML = "Hello Dolly!";
  document.getElementById("demo2").innerHTML = "How are you?";
}</code></pre>
<p>Fungsi di atas terdiri dari dua pernyataan yang akan dijalankan bersama saat fungsi <code>myFunction</code> dipanggil.</p>

<h2>Kata Kunci dalam JavaScript</h2>
<p>Pernyataan JavaScript sering diawali dengan kata kunci yang menentukan aksi yang akan dilakukan. Kata kunci ini adalah bagian dari bahasa pemrograman JavaScript yang memiliki makna khusus.</p>

<p>Berikut adalah beberapa kata kunci yang sering digunakan dalam JavaScript:</p>
<ul>
    <li><b><code>var</code>:</b> Digunakan untuk mendeklarasikan variabel.</li>
    <li><b><code>let</code>:</b> Digunakan untuk mendeklarasikan variabel dalam cakupan blok (block scope).</li>
    <li><b><code>const</code>:</b> Digunakan untuk mendeklarasikan konstanta dalam cakupan blok.</li>
    <li><b><code>if</code>:</b> Digunakan untuk menandai blok pernyataan yang dijalankan jika suatu kondisi terpenuhi.</li>
    <li><b><code>switch</code>:</b> Digunakan untuk memilih blok pernyataan berdasarkan beberapa kasus.</li>
    <li><b><code>for</code>:</b> Digunakan untuk menandai blok pernyataan yang dijalankan dalam suatu perulangan.</li>
    <li><b><code>function</code>:</b> Digunakan untuk mendeklarasikan sebuah fungsi.</li>
    <li><b><code>return</code>:</b> Digunakan untuk keluar dari fungsi dan mengembalikan nilai.</li>
    <li><b><code>try</code>:</b> Digunakan untuk menangani error dalam blok pernyataan.</li>
</ul>

<p>Pernyataan-pernyataan ini dan kata kunci sangat penting untuk mengendalikan alur dan struktur program JavaScript yang Anda buat.</p>
        <br>
        <a href="#output" class="btn-prev">&larr; Previous</a>
        <a href="#syntax" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="syntax" class="content hidden">
        <h1>Sintaks JavaScript</h1>

<p>Sintaks JavaScript adalah seperangkat aturan yang menjelaskan bagaimana program JavaScript dibangun. Sintaks ini mencakup cara membuat variabel, cara menggunakan operator, cara menulis ekspresi, dan berbagai elemen lainnya dalam penulisan kode.</p>

<h2>Cara Membuat Variabel dalam JavaScript</h2>
<p>Untuk membuat variabel dalam JavaScript, kita menggunakan kata kunci seperti <code>var</code>, <code>let</code>, atau <code>const</code>. Berikut adalah cara mendeklarasikan variabel:</p>
<pre><code>var x;    // Menggunakan var
let y;    // Menggunakan let</code></pre>

<h2>Cara Menggunakan Variabel</h2>
<p>Setelah variabel dideklarasikan, kita dapat memberikan nilai menggunakan operator penugasan (<code>=</code>):</p>
<pre><code>x = 5;    // Memberikan nilai 5 pada variabel x
y = 6;    // Memberikan nilai 6 pada variabel y
let z = x + y;  // Menjumlahkan x dan y, hasilnya disimpan di variabel z</code></pre>

<h2>Nilai dalam JavaScript</h2>
<p>JavaScript memiliki dua jenis nilai:</p>
<ul>
    <li><b>Nilai Tetap</b>: Nilai yang ditulis langsung dalam kode, seperti angka atau string.</li>
    <li><b>Nilai Variabel</b>: Nilai yang disimpan dalam variabel. Variabel digunakan untuk menyimpan dan memanipulasi data dalam program.</li>
</ul>
<p>Contoh nilai dalam JavaScript:</p>
<pre><code>let x = 10; // Angka
let name = "John"; // String</code></pre>

<h2>Operator dalam JavaScript</h2>
<p>JavaScript menggunakan operator aritmatika untuk melakukan perhitungan matematika. Beberapa operator yang sering digunakan adalah:</p>
<ul>
    <li><code>+</code> (penjumlahan)</li>
    <li><code>-</code> (pengurangan)</li>
    <li><code>*</code> (perkalian)</li>
    <li><code>/</code> (pembagian)</li>
</ul>
<p>Contoh penggunaan operator dalam JavaScript:</p>
<pre><code>(5 + 6) * 10;  // Menjumlahkan 5 dan 6, lalu mengalikannya dengan 10</code></pre>

<h2>Ekspresi dalam JavaScript</h2>
<p>Ekspresi adalah kombinasi dari nilai, variabel, dan operator yang menghasilkan sebuah nilai. Proses perhitungan yang menghasilkan nilai ini disebut <i>evaluasi</i>.</p>
<pre><code>5 * 10;  // Hasilnya adalah 50
"x" + "y";  // Hasilnya adalah "xy"</code></pre>

<h2>Kata Kunci dalam JavaScript</h2>
<p>Kata kunci dalam JavaScript digunakan untuk mengidentifikasi tindakan yang akan dilakukan. Beberapa kata kunci penting yang digunakan untuk mendeklarasikan variabel adalah <code>let</code> dan <code>var</code>.</p>
<pre><code>let x, y;
x = 5 + 6;
y = x * 10;</code></pre>

<h2>Komentar dalam JavaScript</h2>
<p>Komentar digunakan untuk memberi penjelasan dalam kode dan tidak akan dieksekusi oleh JavaScript. Komentar dimulai dengan dua garis miring (<code>//</code>) untuk komentar satu baris, atau dengan <code>/*</code> dan <code>*/</code> untuk komentar lebih dari satu baris.</p>
<pre><code>let x = 5;   // Ini adalah komentar satu baris
// x = 6;   Ini adalah komentar dan tidak akan dieksekusi</code></pre>

<h2>Identifikasi / Nama dalam JavaScript</h2>
<p>Identifikasi adalah nama-nama yang digunakan untuk variabel, fungsi, dan kata kunci. Dalam JavaScript, ada aturan tertentu untuk memberi nama (identifier) sebagai berikut:</p>
<ul>
    <li>Nama harus dimulai dengan huruf (A-Z atau a-z), tanda dolar (<code>$</code>), atau garis bawah (<code>_</code>).</li>
    <li>Setelah karakter pertama, nama dapat mengandung huruf, angka, garis bawah, atau tanda dolar.</li>
    <li>Nama tidak boleh dimulai dengan angka.</li>
</ul>
<p>Contoh nama yang valid:</p>
<pre><code>let firstName;   // Valid
let _firstName;  // Valid
let $firstName;  // Valid</code></pre>

<h2>JavaScript Adalah Case Sensitive</h2>
<p>JavaScript membedakan huruf besar dan kecil, jadi <code>lastName</code> dan <code>lastname</code> adalah dua variabel yang berbeda.</p>
<pre><code>let lastName, lastname;
lastName = "Doe";
lastname = "Peterson";</code></pre>

<h2>JavaScript dan Camel Case</h2>
<p>Dalam penulisan variabel di JavaScript, programmer sering menggunakan <i>camel case</i>, yaitu metode penulisan variabel dengan menggabungkan beberapa kata dengan huruf pertama setiap kata setelah kata pertama menggunakan huruf kapital.</p>
<p>Contoh penggunaan camel case:</p>
<pre><code>let firstName;   // Lower camel case
let lastName;     // Lower camel case</code></pre>

<h2>Set Karakter JavaScript</h2>
<p>JavaScript menggunakan set karakter <b>Unicode</b>, yang mencakup hampir semua karakter, tanda baca, dan simbol di dunia. Unicode memungkinkan JavaScript untuk mendukung berbagai bahasa dan simbol internasional.</p>
        <br>
        <a href="#statements" class="btn-prev">&larr; Previous</a>
        <a href="#comments" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="comments" class="content hidden">
        <h1>Komentar JavaScript</h1>

        <p>Komentar JavaScript digunakan untuk menjelaskan kode JavaScript dan membuatnya lebih mudah dibaca.</p>
        <p>Komentar JavaScript juga dapat digunakan untuk mencegah eksekusi kode, terutama saat menguji kode alternatif.</p>
        
        <h2>Komentar Satu Baris</h2>
        <p>Komentar satu baris dimulai dengan <code>//</code>.</p>
        <p>Semua teks antara <code>//</code> dan akhir baris akan diabaikan oleh JavaScript (tidak akan dieksekusi).</p>
        
        <p>Contoh di bawah ini menggunakan komentar satu baris sebelum setiap baris kode:</p>
        <pre><code>
        // Mengubah judul:
        document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
        
        // Mengubah paragraf:
        document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
        </code></pre>
        
        <p>Contoh berikut menggunakan komentar satu baris di akhir setiap baris untuk menjelaskan kode:</p>
        <pre><code>
        let x = 5;      // Deklarasikan x, beri nilai 5
        let y = x + 2;  // Deklarasikan y, beri nilai x + 2
        </code></pre>
        
        <h2>Komentar Beberapa Baris</h2>
        <p>Komentar beberapa baris dimulai dengan <code>/*</code> dan diakhiri dengan <code>*/</code>.</p>
        <p>Semua teks antara <code>/*</code> dan <code>*/</code> akan diabaikan oleh JavaScript.</p>
        
        <p>Contoh di bawah ini menggunakan komentar beberapa baris (blok komentar) untuk menjelaskan kode:</p>
        <pre><code>
        /*
        Kode di bawah ini akan mengubah
        judul dengan id = "myH"
        dan paragraf dengan id = "myP"
        di halaman web saya:
        */
        document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
        document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
        </code></pre>
        
        <h2>Penggunaan Komentar untuk Mencegah Eksekusi</h2>
        <p>Penggunaan komentar untuk mencegah eksekusi kode sangat berguna saat menguji kode.</p>
        <p>Menambahkan <code>//</code> di depan baris kode mengubah baris tersebut dari baris yang dapat dieksekusi menjadi komentar.</p>
        
        <p>Contoh berikut menggunakan <code>//</code> untuk mencegah eksekusi salah satu baris kode:</p>
        <pre><code>
        //document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
        document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
        </code></pre>
        
        <p>Contoh berikut menggunakan blok komentar untuk mencegah eksekusi beberapa baris kode:</p>
        <pre><code>
        /*
        document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
        document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
        */
        </code></pre>
        <br>
        <a href="#syntax" class="btn-prev">&larr; Previous</a>
        <a href="#variables" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="variables" class="content hidden">

        <h1>Variabel JavaScript</h1>

        <p>Variabel adalah tempat untuk menyimpan data dalam JavaScript.</p>
        <p>Variabel JavaScript dapat dideklarasikan dengan 4 cara:</p>
        <ul>
            <li>Secara otomatis</li>
            <li>Menggunakan <code>var</code></li>
            <li>Menggunakan <code>let</code></li>
            <li>Menggunakan <code>const</code></li>
        </ul>
        
        <h2>Contoh 1: Variabel yang dideklarasikan secara otomatis</h2>
        <p>Dalam contoh pertama, <code>x</code>, <code>y</code>, dan <code>z</code> adalah variabel yang belum dideklarasikan. Mereka akan otomatis dideklarasikan saat pertama kali digunakan:</p>
        <pre><code>
        x = 5;
        y = 6;
        z = x + y;
        </code></pre>
        
        <p><strong>Catatan:</strong> Praktik yang baik adalah selalu mendeklarasikan variabel sebelum digunakan.</p>
        
        <p>Dari contoh di atas, Anda bisa menebak bahwa:</p>
        <ul>
            <li><code>x</code> menyimpan nilai 5</li>
            <li><code>y</code> menyimpan nilai 6</li>
            <li><code>z</code> menyimpan nilai 11</li>
        </ul>
        
        <h2>Contoh 2: Menggunakan <code>var</code></h2>
        <pre><code>
        var x = 5;
        var y = 6;
        var z = x + y;
        </code></pre>
        
        <p><strong>Catatan:</strong> Kata kunci <code>var</code> digunakan dalam semua kode JavaScript dari tahun 1995 hingga 2015. Kata kunci <code>let</code> dan <code>const</code> baru ditambahkan pada JavaScript pada tahun 2015. Sebaiknya gunakan <code>let</code> atau <code>const</code> untuk kode yang lebih baru, dan hanya gunakan <code>var</code> jika Anda perlu mendukung browser lama.</p>
        
        <h2>Contoh 3: Menggunakan <code>let</code></h2>
        <pre><code>
        let x = 5;
        let y = 6;
        let z = x + y;
        </code></pre>
        
        <h2>Contoh 4: Menggunakan <code>const</code></h2>
        <pre><code>
        const x = 5;
        const y = 6;
        const z = x + y;
        </code></pre>
        
        <h2>Contoh Campuran</h2>
        <pre><code>
        const price1 = 5;
        const price2 = 6;
        let total = price1 + price2;
        </code></pre>
        
        <p>Di sini, <code>price1</code> dan <code>price2</code> dideklarasikan dengan kata kunci <code>const</code> karena nilai mereka tidak bisa diubah. Variabel <code>total</code> dideklarasikan dengan kata kunci <code>let</code>, sehingga nilainya bisa diubah.</p>
        
        <h2>Kapan Menggunakan <code>var</code>, <code>let</code>, atau <code>const</code>?</h2>
        <ul>
            <li>Selalu deklarasikan variabel.</li>
            <li>Gunakan <code>const</code> jika nilai variabel tidak boleh diubah.</li>
            <li>Gunakan <code>const</code> jika tipe variabel (seperti Array dan Objek) tidak boleh diubah.</li>
            <li>Hanya gunakan <code>let</code> jika Anda tidak bisa menggunakan <code>const</code>.</li>
            <li>Hanya gunakan <code>var</code> jika Anda harus mendukung browser lama.</li>
        </ul>
        
        <h2>Seperti Aljabar</h2>
        <p>Seperti dalam aljabar, variabel menyimpan nilai:</p>
        <pre><code>
        let x = 5;
        let y = 6;
        </code></pre>
        
        <p>Seperti dalam aljabar, variabel juga digunakan dalam ekspresi:</p>
        <pre><code>
        let z = x + y;
        </code></pre>
        
        <p>Dari contoh di atas, kita bisa menebak bahwa totalnya adalah 11.</p>
        
        <p><strong>Catatan:</strong> Variabel adalah wadah untuk menyimpan nilai.</p>
        
        <h2>Identifikasi JavaScript</h2>
        <p>Semua variabel JavaScript harus diidentifikasi dengan nama yang unik. Nama-nama ini disebut <strong>identifikator</strong>.</p>
        <p>Identifikator bisa berupa nama pendek (seperti <code>x</code> dan <code>y</code>) atau nama yang lebih deskriptif (seperti <code>umur</code>, <code>jumlah</code>, <code>totalVolume</code>).</p>
        
        <p>Aturan umum untuk membuat nama variabel (identifikator) adalah:</p>
        <ul>
            <li>Nama dapat berisi huruf, angka, garis bawah (<code>_</code>), dan tanda dolar (<code>$</code>).</li>
            <li>Nama harus dimulai dengan huruf.</li>
            <li>Nama dapat dimulai dengan <code>$</code> dan <code>_</code> (meskipun tidak disarankan dalam tutorial ini).</li>
            <li>Nama bersifat <strong>case-sensitive</strong> (huruf besar dan kecil dianggap berbeda, misalnya <code>y</code> dan <code>Y</code> adalah variabel yang berbeda).</li>
            <li>Kata yang sudah terpakai sebagai kata kunci JavaScript tidak boleh digunakan sebagai nama variabel.</li>
        </ul>
        
        <p><strong>Catatan:</strong> Identifikator JavaScript <strong>case-sensitive</strong>.</p>
        
        <h2>Operator Penugasan</h2>
        <p>Di JavaScript, tanda sama dengan (<code>=</code>) adalah <strong>operator penugasan</strong>, bukan operator "sama dengan".</p>
        <p>Ini berbeda dengan aljabar. Berikut ini tidak masuk akal dalam aljabar:</p>
        <pre><code>
        x = x + 5;
        </code></pre>
        
        <p>Namun, di JavaScript, ini masuk akal: ini memberi nilai <code>x + 5</code> pada variabel <code>x</code> (artinya nilai <code>x</code> ditambah 5 dan disimpan kembali ke dalam <code>x</code>).</p>
        
        <p><strong>Catatan:</strong> Operator "sama dengan" di JavaScript ditulis sebagai <code>==</code>.</p>
        
        <h2>Tipe Data JavaScript</h2>
        <p>Variabel JavaScript dapat menyimpan angka seperti 100 atau nilai teks seperti "John Doe".</p>
        <p>Dalam pemrograman, nilai teks disebut <strong>string</strong>.</p>
        
        <p>JavaScript dapat menangani berbagai tipe data, tetapi untuk sekarang, kita hanya akan membahas angka dan string.</p>
        <ul>
            <li><strong>String</strong> ditulis dalam tanda kutip tunggal atau ganda.</li>
            <li><strong>Angka</strong> ditulis tanpa kutip.</li>
        </ul>
        
        <p>Jika Anda meletakkan angka di dalam kutip, maka itu akan dianggap sebagai string.</p>
        
        <p><strong>Contoh:</strong></p>
        <pre><code>
        const pi = 3.14;
        let person = "John Doe";
        let answer = 'Yes I am!';
        </code></pre>
        
        <h2>Mendeklarasikan Variabel JavaScript</h2>
        <p>Membuat variabel di JavaScript disebut "mendeklarasikan" variabel.</p>
        
        <p>Anda dapat mendeklarasikan variabel dengan kata kunci <code>var</code> atau <code>let</code>:</p>
        <pre><code>
        var carName;
        </code></pre>
        
        atau:
        
        <pre><code>
        let carName;
        </code></pre>
        
        <p>Setelah deklarasi, variabel tersebut tidak memiliki nilai (secara teknis nilainya adalah <code>undefined</code>).</p>
        
        <p>Untuk memberi nilai pada variabel, gunakan tanda sama dengan (<code>=</code>):</p>
        <pre><code>
        carName = "Volvo";
        </code></pre>
        
        <p>Anda juga dapat langsung memberikan nilai pada variabel saat deklarasi:</p>
        <pre><code>
        let carName = "Volvo";
        </code></pre>
        
        <h2>Contoh Menampilkan Variabel di HTML</h2>
        <pre><code>
        <p id="demo"></p>
        
        <script>
        let carName = "Volvo";
        document.getElementById("demo").innerHTML = carName;
        </script>
        </code></pre>
        
        <p><strong>Catatan:</strong> Praktik yang baik adalah mendeklarasikan semua variabel di awal skrip.</p>
        
        <h2>Satu Pernyataan, Banyak Variabel</h2>
        <p>Anda dapat mendeklarasikan banyak variabel dalam satu pernyataan. Mulai pernyataan dengan <code>let</code> dan pisahkan variabel dengan koma:</p>
        <pre><code>
        let person = "John Doe", carName = "Volvo", price = 200;
        </code></pre>
        
        <p>Pernyataan juga bisa ditulis dalam beberapa baris:</p>
        <pre><code>
        let person = "John Doe",
            carName = "Volvo",
            price = 200;
        </code></pre>
        
        <h2>Nilai = undefined</h2>
        <p>Dalam pemrograman komputer, variabel sering dideklarasikan tanpa nilai. Nilai tersebut bisa dihitung nanti atau diberikan oleh input pengguna.</p>
        
        <p>Variabel yang dideklarasikan tanpa nilai akan memiliki nilai <code>undefined</code>.</p>
        <pre><code>
        let carName;
        </code></pre>
        
        <h2>Mendeklarasikan Ulang Variabel JavaScript</h2>
        <p>Jika Anda mendeklarasikan ulang variabel yang dideklarasikan dengan <code>var</code>, nilai variabel tersebut tidak akan hilang:</p>
        <pre><code>
        var carName = "Volvo";
        var carName;
        </code></pre>
        
        <p><strong>Catatan:</strong> Anda tidak bisa mendeklarasikan ulang variabel yang dideklarasikan dengan <code>let</code> atau <code>const</code>. Ini tidak akan berfungsi:</p>
        <pre><code>
        let carName = "Volvo";
        let carName;  // Error
        </code></pre>
        
        <h2>Aritmatika JavaScript</h2>
        <p>Seperti dalam aljabar, Anda dapat melakukan perhitungan aritmatika dengan variabel JavaScript, menggunakan operator seperti <code>=</code> dan <code>+</code>:</p>
        <pre><code>
        let x = 5 + 2 + 3;
        </code></pre>
        
        <p>Anda juga bisa menggabungkan string, tetapi string akan digabungkan (concatenated):</p>
        <pre><code>
        let x = "John" + " " + "Doe";
        </code></pre>
        
        <p><strong>Catatan:</strong> Jika Anda meletakkan angka dalam kutip, angka-angka lainnya akan dianggap sebagai string dan akan digabungkan.</p>
        
        <p>Coba juga yang ini:</p>
        <pre><code>
        let x = 2 + 3 + "5";
        </code></pre>
        
        <h2>Tanda Dollar (<code>$</code>) di JavaScript</h2>
        <p>Karena JavaScript memperlakukan tanda dolar sebagai huruf, identifikator yang mengandung <code>$</code> adalah nama variabel yang valid:</p>
        <pre><code>
        let $x = 5;
        let _x = 6;
        </code></pre>
        
        <p>Dengan menggunakan <code>$</code> di awal nama variabel, Anda bisa mendeklarasikan variabel tanpa kesulitan.</p>
        <br>
        <a href="#comments" class="btn-prev">&larr; Previous</a>
        <a href="#let" class="btn-next">Next &rarr;</a>        
    </section>

    <section id="let" class="content hidden">
        <h1>Penjelasan JavaScript `let`</h1>
    
        <p>Kata kunci <code>let</code> diperkenalkan pada ES6 (2015) dan digunakan untuk mendeklarasikan variabel dalam JavaScript.</p>
    
        <h2>JavaScript <code>let</code></h2>
        <p>Variabel yang dideklarasikan dengan <code>let</code> memiliki <strong>Block Scope</strong> dan harus dideklarasikan sebelum digunakan. Selain itu, variabel yang dideklarasikan dengan <code>let</code> <strong>tidak dapat dideklarasikan ulang</strong> dalam scope yang sama.</p>
    
        <h3>Block Scope</h3>
        <p>Sebelum ES6, JavaScript hanya memiliki <strong>Global Scope</strong> dan <strong>Function Scope</strong>. Dengan diperkenalkannya <code>let</code>, JavaScript kini mendukung <strong>Block Scope</strong>.</p>
        <pre><code>
        {
          let x = 2;
        }
        // x TIDAK bisa digunakan di sini
        </code></pre>
    
        <h3>Global Scope dengan <code>var</code></h3>
        <p>Variabel yang dideklarasikan dengan <code>var</code> selalu memiliki <strong>Global Scope</strong> dan dapat diakses di luar blok di mana mereka dideklarasikan.</p>
        <pre><code>
        {
          var x = 2;
        }
        // x BISA digunakan di sini
        </code></pre>
    
        <h3>Tidak Bisa Dideklarasikan Ulang</h3>
        <p>Variabel yang dideklarasikan dengan <code>let</code> tidak dapat dideklarasikan ulang dalam scope yang sama, yang membantu mencegah kesalahan pemrograman.</p>
        <pre><code>
        let x = "John Doe";
    
        let x = 0; // Error
        </code></pre>
    
        <h3>Contoh Penggunaan <code>var</code></h3>
        <p>Sebaliknya, variabel yang dideklarasikan dengan <code>var</code> dapat dideklarasikan ulang tanpa menghasilkan error.</p>
        <pre><code>
        var x = "John Doe";
    
        var x = 0; // Tidak ada error
        </code></pre>
    
        <h3>Mendeklarasikan Ulang Variabel</h3>
        <p>Dengan <code>var</code>, mendeklarasikan ulang variabel di dalam blok juga akan mendeklarasikan ulang variabel tersebut di luar blok. Ini bisa menyebabkan masalah dalam pengelolaan variabel.</p>
        <pre><code>
        var x = 10;
        // Di sini x adalah 10
    
        {
          var x = 2;
          // Di sini x adalah 2
        }
    
        // Di sini x adalah 2
        </code></pre>
    
        <p>Namun dengan <code>let</code>, mendeklarasikan ulang variabel dalam blok tidak akan mempengaruhi nilai variabel di luar blok tersebut.</p>
        <pre><code>
        let x = 10;
        // Di sini x adalah 10
    
        {
          let x = 2;
          // Di sini x adalah 2
        }
    
        // Di sini x tetap 10
        </code></pre>
    
        <h3>Perbedaan antara <code>var</code>, <code>let</code>, dan <code>const</code></h3>
        <p>Berikut adalah tabel yang menjelaskan perbedaan utama antara <code>var</code>, <code>let</code>, dan <code>const</code>:</p>
        <table>
            <thead>
                <tr>
                    <th>Scope</th>
                    <th>Dapat Dideklarasikan Ulang</th>
                    <th>Dapat Diganti Nilainya</th>
                    <th>Hoisted</th>
                    <th>Mengikat <code>this</code></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>var</code></td>
                    <td>Tidak</td>
                    <td>Ya</td>
                    <td>Ya</td>
                    <td>Ya</td>
                </tr>
                <tr>
                    <td><code>let</code></td>
                    <td>Ya</td>
                    <td>Tidak</td>
                    <td>Ya</td>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td><code>const</code></td>
                    <td>Ya</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Keuntungan Menggunakan <code>let</code></h3>
        <ul>
            <li><code>let</code> dan <code>const</code> memiliki <strong>block scope</strong> dan tidak dapat dideklarasikan ulang.</li>
            <li><code>let</code> dan <code>const</code> harus dideklarasikan sebelum digunakan.</li>
            <li><code>let</code> dan <code>const</code> tidak mengikat ke <code>this</code>.</li>
        </ul>
    
        <h3>Kekurangan Menggunakan <code>var</code></h3>
        <ul>
            <li><code>var</code> dapat dideklarasikan ulang di dalam scope yang sama.</li>
            <li><code>var</code> mengikat ke <code>this</code>.</li>
        </ul>
    
        <h3>Dukungan Browser</h3>
        <p>Kata kunci <code>let</code> dan <code>const</code> tidak didukung di Internet Explorer 11 atau versi sebelumnya.</p>
        <table>
            <thead>
                <tr>
                    <th>Browser</th>
                    <th>Versi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chrome</td>
                    <td>49</td>
                    <td>Mar, 2016</td>
                </tr>
                <tr>
                    <td>Edge</td>
                    <td>12</td>
                    <td>Jul, 2015</td>
                </tr>
                <tr>
                    <td>Firefox</td>
                    <td>36</td>
                    <td>Jan, 2015</td>
                </tr>
                <tr>
                    <td>Safari</td>
                    <td>11</td>
                    <td>Sep, 2017</td>
                </tr>
                <tr>
                    <td>Opera</td>
                    <td>36</td>
                    <td>Mar, 2016</td>
                </tr>
            </tbody>
        </table>
    
        <br>
        <a href="#variables" class="btn-prev">&larr; Previous</a>
        <a href="#const" class="btn-next">Next &rarr;</a>
    </section>
    <section id="const" class="content hidden">
        <h1>JavaScript `const`</h1>
        
        <p>Kata kunci <code>const</code> diperkenalkan pada ES6 (2015). Berikut adalah penjelasan mengenai penggunaan dan perilaku variabel yang dideklarasikan dengan <code>const</code> dalam JavaScript.</p>
    
        <h2>Tidak Bisa Diubah Nilainya</h2>
        <p>Variabel yang dideklarasikan dengan kata kunci <code>const</code> <strong>tidak dapat diubah nilainya</strong> setelah dideklarasikan.</p>
    
        <p>Contoh berikut ini menunjukkan variabel yang dideklarasikan dengan <code>const</code> yang mencoba untuk diubah nilainya, yang akan menghasilkan error:</p>
        <pre><code>
    const PI = 3.141592653589793;
    PI = 3.14;      // Ini akan menghasilkan error
    PI = PI + 10;   // Ini juga akan menghasilkan error
        </code></pre>
    
        <h2>Harus Diberikan Nilai</h2>
        <p>Variabel yang dideklarasikan dengan <code>const</code> <strong>harus diberi nilai saat pertama kali dideklarasikan</strong>.</p>
        
        <h3>Contoh Benar</h3>
        <pre><code>
    const PI = 3.14159265359;
        </code></pre>
    
        <h3>Contoh Salah</h3>
        <pre><code>
    const PI;
    PI = 3.14159265359;
        </code></pre>
    
        <h2>Kapan Menggunakan `const`?</h2>
        <p>Gunakan <code>const</code> ketika Anda yakin bahwa nilai variabel tersebut <strong>tidak akan berubah</strong>.</p>
        <ul>
            <li>Mendeklarasikan array baru</li>
            <li>Mendeklarasikan objek baru</li>
            <li>Mendeklarasikan fungsi baru</li>
            <li>Mendeklarasikan RegExp baru</li>
        </ul>
    
        <h2>Object dan Array Konstan</h2>
        <p>Perlu diingat bahwa <code>const</code> mendefinisikan referensi konstan, bukan nilai konstan. Anda tidak dapat mengubah referensi (misalnya objek atau array), tetapi Anda masih bisa mengubah nilai di dalam objek atau array tersebut.</p>
    
        <h3>Array Konstan</h3>
        <p>Anda bisa mengubah elemen dalam array konstan, tetapi Anda <strong>tidak dapat mengganti seluruh array</strong>.</p>
        <pre><code>
    // Anda bisa membuat array konstan:
    const cars = ["Saab", "Volvo", "BMW"];
    
    // Anda bisa mengubah elemen:
    cars[0] = "Toyota";
    
    // Anda bisa menambahkan elemen:
    cars.push("Audi");
    
    // Tetapi Anda tidak bisa mengganti array:
    cars = ["Toyota", "Volvo", "Audi"];    // ERROR
        </code></pre>
    
        <h3>Objek Konstan</h3>
        <p>Anda bisa mengubah properti objek konstan, tetapi Anda <strong>tidak dapat mengganti seluruh objek</strong>.</p>
        <pre><code>
    // Anda bisa membuat objek konstan:
    const car = {type: "Fiat", model: "500", color: "white"};
    
    // Anda bisa mengubah properti:
    car.color = "red";
    
    // Anda bisa menambahkan properti:
    car.owner = "Johnson";
    
    // Tetapi Anda tidak bisa mengganti objek:
    car = {type: "Volvo", model: "EX60", color: "red"};    // ERROR
        </code></pre>
    
        <h2>Perbedaan antara `var`, `let`, dan `const`</h2>
        <table>
            <thead>
                <tr>
                    <th>Scope</th>
                    <th>Dapat Dideklarasikan Ulang</th>
                    <th>Dapat Diubah Nilainya</th>
                    <th>Hoisted</th>
                    <th>Mengikat `this`</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>var</td>
                    <td>Tidak</td>
                    <td>Ya</td>
                    <td>Ya</td>
                    <td>Ya</td>
                </tr>
                <tr>
                    <td>let</td>
                    <td>Ya</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>const</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                    <td>Tidak</td>
                </tr>
            </tbody>
        </table>
    
        <h2>Keuntungan</h2>
        <ul>
            <li><code>let</code> dan <code>const</code> memiliki <strong>block scope</strong>.</li>
            <li><code>let</code> dan <code>const</code> tidak dapat dideklarasikan ulang.</li>
            <li><code>let</code> dan <code>const</code> harus dideklarasikan sebelum digunakan.</li>
            <li><code>let</code> dan <code>const</code> tidak mengikat ke <code>this</code>.</li>
            <li><code>let</code> dan <code>const</code> tidak dihoist.</li>
        </ul>
    
        <h2>Kekurangan</h2>
        <ul>
            <li><code>var</code> tidak perlu dideklarasikan.</li>
            <li><code>var</code> dihoist.</li>
            <li><code>var</code> mengikat ke <code>this</code>.</li>
        </ul>
    
        <h2>Dukungan Browser</h2>
        <p>Kata kunci <code>let</code> dan <code>const</code> tidak didukung di Internet Explorer 11 atau versi sebelumnya. Berikut adalah tabel yang menunjukkan versi pertama browser yang mendukung secara penuh:</p>
        <table>
            <thead>
                <tr>
                    <th>Browser</th>
                    <th>Versi</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Chrome</td>
                    <td>49</td>
                    <td>Mar, 2016</td>
                </tr>
                <tr>
                    <td>Edge</td>
                    <td>12</td>
                    <td>Jul, 2015</td>
                </tr>
                <tr>
                    <td>Firefox</td>
                    <td>36</td>
                    <td>Jan, 2015</td>
                </tr>
                <tr>
                    <td>Safari</td>
                    <td>11</td>
                    <td>Sep, 2017</td>
                </tr>
                <tr>
                    <td>Opera</td>
                    <td>36</td>
                    <td>Mar, 2016</td>
                </tr>
            </tbody>
        </table>
    
        <h2>Block Scope</h2>
        <p>Mendeklarasikan variabel dengan <code>const</code> mirip dengan <code>let</code> dalam hal <strong>Block Scope</strong>.</p>
        <pre><code>
    const x = 10;
    // Di sini x adalah 10
    
    {
      const x = 2;
      // Di sini x adalah 2
    }
    
    // Di sini x adalah 10
        </code></pre>
    
        <h2>Mendeklarasikan Ulang</h2>
        <p>Mendeklarasikan ulang variabel dengan <code>var</code> diizinkan di mana saja dalam program. Tetapi mendeklarasikan ulang variabel yang sudah ada dengan <code>const</code> dalam scope yang sama tidak diperbolehkan.</p>
        <pre><code>
    var x = 2;     // Diperbolehkan
    const x = 2;   // Tidak diperbolehkan
        </code></pre>
    
        <h2>Hoisting pada `const`</h2>
        <p>Variabel yang didefinisikan dengan <code>const</code> juga dihoist, tetapi tidak diinisialisasi. Menggunakan variabel sebelum dideklarasikan akan menghasilkan <code>ReferenceError</code>.</p>
        <pre><code>
    alert(carName);
    const carName = "Volvo"; // ReferenceError
        </code></pre>
    
        <br>
        <a href="#let" class="btn-prev">&larr; Previous</a>
        <a href="#operators" class="btn-next">Next &rarr;</a>        
    </section>
    <section id="operators" class="content hidden">
        <h1>Operator JavaScript</h1>
    
        <p>Operator JavaScript digunakan untuk melakukan berbagai jenis perhitungan matematis dan logis.</p>
        <p>Berikut adalah beberapa contoh operator JavaScript:</p>
        <ul>
            <li><strong>Operator Penugasan</strong> <code>=</code> memberikan nilai.</li>
            <li><strong>Operator Penjumlahan</strong> <code>+</code> menambahkan nilai.</li>
            <li><strong>Operator Perkalian</strong> <code>*</code> mengalikan nilai.</li>
            <li><strong>Operator Perbandingan</strong> <code>></code> membandingkan nilai.</li>
        </ul>
    
        <h2>Penugasan JavaScript</h2>
        <p>Operator Penugasan <code>=</code> digunakan untuk memberikan nilai ke sebuah variabel:</p>
        <pre><code>
    let x = 10; // Memberikan nilai 10 ke variabel x
    let x = 5;  // Memberikan nilai 5 ke variabel x
    let y = 2;  // Memberikan nilai 2 ke variabel y
    let z = x + y;  // Memberikan nilai hasil penjumlahan x dan y ke variabel z
        </code></pre>
    
        <h2>Penjumlahan JavaScript</h2>
        <p>Operator Penjumlahan <code>+</code> digunakan untuk menjumlahkan angka:</p>
        <pre><code>
    let x = 5;
    let y = 2;
    let z = x + y;  // z menjadi 7
        </code></pre>
    
        <h2>Perkalian JavaScript</h2>
        <p>Operator Perkalian <code>*</code> digunakan untuk mengalikan angka:</p>
        <pre><code>
    let x = 5;
    let y = 2;
    let z = x * y;  // z menjadi 10
        </code></pre>
    
        <h2>Jenis-Jenis Operator JavaScript</h2>
        <p>Ada berbagai jenis operator di JavaScript:</p>
        <ul>
            <li><strong>Operator Aritmatika</strong></li>
            <li><strong>Operator Penugasan</strong></li>
            <li><strong>Operator Perbandingan</strong></li>
            <li><strong>Operator String</strong></li>
            <li><strong>Operator Logika</strong></li>
            <li><strong>Operator Bitwise</strong></li>
            <li><strong>Operator Ternary</strong></li>
            <li><strong>Operator Tipe</strong></li>
        </ul>
    
        <h2>Operator Aritmatika JavaScript</h2>
        <p>Operator Aritmatika digunakan untuk melakukan operasi matematika pada angka:</p>
        <pre><code>
    let a = 3;
    let x = (100 + 50) * a;  // x menjadi 450
        </code></pre>
        <table>
            <tr>
                <th>Operator</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>+</code></td>
                <td>Penjumlahan</td>
            </tr>
            <tr>
                <td><code>-</code></td>
                <td>Pengurangan</td>
            </tr>
            <tr>
                <td><code>*</code></td>
                <td>Perkalian</td>
            </tr>
            <tr>
                <td><code>**</code></td>
                <td>Eksponen (ES2016)</td>
            </tr>
            <tr>
                <td><code>/</code></td>
                <td>Pembagian</td>
            </tr>
            <tr>
                <td><code>%</code></td>
                <td>Modulus (Sisa Pembagian)</td>
            </tr>
            <tr>
                <td><code>++</code></td>
                <td>Inkrementasi (Menambah 1)</td>
            </tr>
            <tr>
                <td><code>--</code></td>
                <td>Dekrementasi (Mengurangi 1)</td>
            </tr>
        </table>
    
        <h2>Operator Penugasan JavaScript</h2>
        <p>Operator Penugasan digunakan untuk memberikan nilai ke variabel JavaScript.</p>
        <table>
            <tr>
                <th>Operator</th>
                <th>Contoh</th>
                <th>Sama Dengan</th>
            </tr>
            <tr>
                <td><code>=</code></td>
                <td><code>x = y</code></td>
                <td><code>x = y</code></td>
            </tr>
            <tr>
                <td><code>+=</code></td>
                <td><code>x += y</code></td>
                <td><code>x = x + y</code></td>
            </tr>
            <tr>
                <td><code>-=</code></td>
                <td><code>x -= y</code></td>
                <td><code>x = x - y</code></td>
            </tr>
            <tr>
                <td><code>*=</code></td>
                <td><code>x *= y</code></td>
                <td><code>x = x * y</code></td>
            </tr>
            <tr>
                <td><code>/=</code></td>
                <td><code>x /= y</code></td>
                <td><code>x = x / y</code></td>
            </tr>
            <tr>
                <td><code>%=</code></td>
                <td><code>x %= y</code></td>
                <td><code>x = x % y</code></td>
            </tr>
            <tr>
                <td><code>**=</code></td>
                <td><code>x **= y</code></td>
                <td><code>x = x ** y</code></td>
            </tr>
        </table>
    
        <h2>Operator Perbandingan JavaScript</h2>
        <p>Operator Perbandingan digunakan untuk membandingkan nilai.</p>
        <table>
            <tr>
                <th>Operator</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>==</code></td>
                <td>Sama dengan</td>
            </tr>
            <tr>
                <td><code>===</code></td>
                <td>Sama dengan nilai dan tipe</td>
            </tr>
            <tr>
                <td><code>!=</code></td>
                <td>Tidak sama dengan</td>
            </tr>
            <tr>
                <td><code>!==</code></td>
                <td>Tidak sama dengan nilai atau tipe</td>
            </tr>
            <tr>
                <td><code>&gt;</code></td>
                <td>Lebih besar daripada</td>
            </tr>
            <tr>
                <td><code>&lt;</code></td>
                <td>Lebih kecil daripada</td>
            </tr>
            <tr>
                <td><code>&gt;=</code></td>
                <td>Lebih besar atau sama dengan</td>
            </tr>
            <tr>
                <td><code>&lt;=</code></td>
                <td>Lebih kecil atau sama dengan</td>
            </tr>
            <tr>
                <td><code>?</code></td>
                <td>Operator ternary</td>
            </tr>
        </table>
    
        <h2>Perbandingan String JavaScript</h2>
        <p>Semua operator perbandingan di atas juga dapat digunakan pada string:</p>
        <pre><code>
    let text1 = "A";
    let text2 = "B";
    let result = text1 < text2;  // true karena "A" lebih kecil daripada "B"
        </code></pre>
    
        <h2>Penjumlahan String JavaScript</h2>
        <p>Operator <code>+</code> juga digunakan untuk menambahkan (menggabungkan) string:</p>
        <pre><code>
    let text1 = "John";
    let text2 = "Doe";
    let text3 = text1 + " " + text2;  // "John Doe"
        </code></pre>
    
        <h2>Menambahkan String dan Angka</h2>
        <p>Menambahkan dua angka akan menghasilkan jumlah, tetapi menambahkan angka dan string akan menghasilkan string:</p>
        <pre><code>
    let x = 5 + 5;   // 10
    let y = "5" + 5; // "55"
    let z = "Hello" + 5; // "Hello5"
        </code></pre>
    
        <h2>Operator Logika JavaScript</h2>
        <table>
            <tr>
                <th>Operator</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>&&&</code></td>
                <td>Logika AND</td>
            </tr>
            <tr>
                <td><code>||</code></td>
                <td>Logika OR</td>
            </tr>
            <tr>
                <td><code>!</code></td>
                <td>Logika NOT</td>
            </tr>
        </table>
    
        <h2>Operator Tipe JavaScript</h2>
        <table>
            <tr>
                <th>Operator</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>typeof</code></td>
                <td>Mengetahui tipe data variabel</td>
            </tr>
            <tr>
                <td><code>instanceof</code></td>
                <td>Memeriksa tipe objek</td>
            </tr>
        </table>
    
        <h2>Operator Bitwise JavaScript</h2>
        <p>Operator Bitwise bekerja pada angka 32-bit:</p>
        <table>
            <tr>
                <th>Operator</th>
                <th>Deskripsi</th>
                <th>Contoh</th>
                <th>Hasil Biner</th>
                <th>Hasil Desimal</th>
            </tr>
            <tr>
                <td><code>&</code></td>
                <td>AND</td>
                <td><code>5 & 1</code></td>
                <td><code>0001</code></td>
                <td>1</td>
            </tr>
            <tr>
                <td><code>|</code></td>
                <td>OR</td>
                <td><code>5 | 1</code></td>
                <td><code>0101</code></td>
                <td>5</td>
            </tr>
            <tr>
                <td><code>~</code></td>
                <td>NOT</td>
                <td><code>~5</code></td>
                <td><code>1010</code></td>
                <td>10</td>
            </tr>
            <tr>
                <td><code>^</code></td>
                <td>XOR</td>
                <td><code>5 ^ 1</code></td>
                <td><code>0100</code></td>
                <td>4</td>
            </tr>
            <tr>
                <td><code>&lt;&lt;</code></td>
                <td>Perpindahan Kiri</td>
                <td><code>5 << 1</code></td>
                <td><code>1010</code></td>
                <td>10</td>
            </tr>
            <tr>
                <td><code>&gt;&gt;</code></td>
                <td>Perpindahan Kanan</td>
                <td><code>5 >> 1</code></td>
                <td><code>0010</code></td>
                <td>2</td>
            </tr>
            <tr>
                <td><code>&gt;&gt;&gt;</code></td>
                <td>Perpindahan Kanan Tanpa Tanda</td>
                <td><code>5 >>> 1</code></td>
                <td><code>0010</code></td>
                <td>2</td>
            </tr>
        </table>
    
        <br>
        <a href="#const" class="btn-prev">&larr; Sebelumnya</a>
        <a href="#arithmetic" class="btn-next">Selanjutnya &rarr;</a>        
    </section>
    
    <section id="arithmetic" class="content hidden">
        <h1>Operator Aritmatika JavaScript</h1>
    
        <p>Operator Aritmatika digunakan untuk melakukan perhitungan aritmatika pada angka (literalis atau variabel).</p>
    
        <h2>Daftar Operator Aritmatika</h2>
        <table>
            <tr>
                <th><strong>Operator</strong></th>
                <th><strong>Deskripsi</strong></th>
            </tr>
            <tr>
                <td>+</td>
                <td>Penjumlahan</td>
            </tr>
            <tr>
                <td>-</td>
                <td>Pengurangan</td>
            </tr>
            <tr>
                <td>*</td>
                <td>Perkalian</td>
            </tr>
            <tr>
                <td>**</td>
                <td>Eksponen (ES2016)</td>
            </tr>
            <tr>
                <td>/</td>
                <td>Pembagian</td>
            </tr>
            <tr>
                <td>%</td>
                <td>Modulus (Sisa Pembagian)</td>
            </tr>
            <tr>
                <td>++</td>
                <td>Inkrementasi (Menambah 1)</td>
            </tr>
            <tr>
                <td>--</td>
                <td>Dekrementasi (Mengurangi 1)</td>
            </tr>
        </table>
    
        <h2>Operasi Aritmatika</h2>
        <p>Operasi aritmatika dilakukan pada dua angka. Dua angka tersebut bisa berupa literal, variabel, atau ekspresi.</p>
    
        <h3>Contoh Penggunaan Operator Aritmatika</h3>
        <p>Literal:</p>
        <pre><code>let x = 100 + 50;</code></pre>
    
        <p>Variabel:</p>
        <pre><code>let x = a + b;</code></pre>
    
        <p>Ekspresi:</p>
        <pre><code>let x = (100 + 50) * a;</code></pre>
    
        <h3>Operator dan Operand</h3>
        <p>Angka-angka dalam operasi aritmatika disebut operand. Operasi yang dilakukan antara dua operand didefinisikan oleh operator.</p>
        <pre><code>
        Operand   Operator   Operand
        100        +         50
        </code></pre>
    
        <h2>Contoh Operator Aritmatika</h2>
        
        <h3>Penjumlahan</h3>
        <pre><code>
        let x = 5;
        let y = 2;
        let z = x + y;
        </code></pre>
    
        <h3>Pengurangan</h3>
        <pre><code>
        let x = 5;
        let y = 2;
        let z = x - y;
        </code></pre>
    
        <h3>Perkalian</h3>
        <pre><code>
        let x = 5;
        let y = 2;
        let z = x * y;
        </code></pre>
    
        <h3>Pembagian</h3>
        <pre><code>
        let x = 5;
        let y = 2;
        let z = x / y;
        </code></pre>
    
        <h3>Sisa Pembagian</h3>
        <pre><code>
        let x = 5;
        let y = 2;
        let z = x % y;
        </code></pre>
    
        <h3>Inkrementasi</h3>
        <pre><code>
        let x = 5;
        x++;
        let z = x;
        </code></pre>
    
        <h3>Dekrementasi</h3>
        <pre><code>
        let x = 5;
        x--;
        let z = x;
        </code></pre>
    
        <h3>Eksponen</h3>
        <pre><code>
        let x = 5;
        let z = x ** 2;
        </code></pre>
        <p>Atau menggunakan <code>Math.pow()</code>:</p>
        <pre><code>
        let x = 5;
        let z = Math.pow(x, 2);
        </code></pre>
    
        <h2>Prioritas Operator</h2>
        <p>Prioritas operator menggambarkan urutan di mana operasi dilakukan dalam ekspresi aritmatika. Perkalian dan pembagian memiliki prioritas lebih tinggi daripada penjumlahan dan pengurangan.</p>
        <pre><code>
        let x = 100 + 50 * 3; // Hasilnya adalah 250 karena perkalian dilakukan lebih dulu
        </code></pre>
    
        <h3>Contoh Penggunaan Tanda Kurung</h3>
        <pre><code>
        let x = (100 + 50) * 3; // Hasilnya adalah 450 karena penjumlahan dilakukan lebih dulu
        </code></pre>
    
        <h3>Operasi dengan Prioritas yang Sama</h3>
        <pre><code>
        let x = 100 + 50 - 3;  // Hasilnya adalah 147, dihitung dari kiri ke kanan
        let x = 100 / 50 * 3;  // Hasilnya adalah 6, dihitung dari kiri ke kanan
        </code></pre>
    
        <p>Untuk daftar lengkap nilai prioritas operator, Anda dapat mengunjungi <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Operator_Precedence" target="_blank">Nilai Prioritas Operator JavaScript</a>.</p>
    
        <br>
        <a href="#operator" class="btn-prev">&larr; Previous</a>
        <a href="#assignment" class="btn-next">Next &rarr;</a>
    </section>
    <section id="assignment" class="content hidden">
        <h1>Operator Penugasan JavaScript</h1>
    
        <p>Operator penugasan digunakan untuk memberikan nilai kepada variabel dalam JavaScript.</p>
        
        <h2>Tabel Operator Penugasan</h2>
        <table border="1">
            <thead>
                <tr>
                    <th><strong>Operator</strong></th>
                    <th><strong>Contoh</strong></th>
                    <th><strong>Sama dengan</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>=</td>
                    <td>x = y</td>
                    <td>x = y</td>
                </tr>
                <tr>
                    <td>+=</td>
                    <td>x += y</td>
                    <td>x = x + y</td>
                </tr>
                <tr>
                    <td>-=</td>
                    <td>x -= y</td>
                    <td>x = x - y</td>
                </tr>
                <tr>
                    <td>*=</td>
                    <td>x *= y</td>
                    <td>x = x * y</td>
                </tr>
                <tr>
                    <td>/=</td>
                    <td>x /= y</td>
                    <td>x = x / y</td>
                </tr>
                <tr>
                    <td>%=</td>
                    <td>x %= y</td>
                    <td>x = x % y</td>
                </tr>
                <tr>
                    <td>**=</td>
                    <td>x **= y</td>
                    <td>x = x ** y</td>
                </tr>
            </tbody>
        </table>
    
        <h2>Operator Penugasan Geser</h2>
        <table border="1">
            <thead>
                <tr>
                    <th><strong>Operator</strong></th>
                    <th><strong>Contoh</strong></th>
                    <th><strong>Sama dengan</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code><< =</code></td>
                    <td><code>x <<= y</code></td>
                    <td><code>x = x << y</code></td>
                </tr>
                <tr>
                    <td><code>> =</code></td>
                    <td><code>x >>= y</code></td>
                    <td><code>x = x >> y</code></td>
                </tr>
                <tr>
                    <td><code>> >=</code></td>
                    <td><code>x >>>= y</code></td>
                    <td><code>x = x >>> y</code></td>
                </tr>
            </tbody>
        </table>
    
        <h2>Operator Penugasan Bitwise</h2>
        <table border="1">
            <thead>
                <tr>
                    <th><strong>Operator</strong></th>
                    <th><strong>Contoh</strong></th>
                    <th><strong>Sama dengan</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>&=</code></td>
                    <td><code>x &= y</code></td>
                    <td><code>x = x & y</code></td>
                </tr>
                <tr>
                    <td><code>^=</code></td>
                    <td><code>x ^= y</code></td>
                    <td><code>x = x ^ y</code></td>
                </tr>
                <tr>
                    <td><code>|=</code></td>
                    <td><code>x |= y</code></td>
                    <td><code>x = x | y</code></td>
                </tr>
            </tbody>
        </table>
    
        <h2>Operator Penugasan Logika</h2>
        <table border="1">
            <thead>
                <tr>
                    <th><strong>Operator</strong></th>
                    <th><strong>Contoh</strong></th>
                    <th><strong>Sama dengan</strong></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>&&=</code></td>
                    <td><code>x &&= y</code></td>
                    <td><code>x = x && (x = y)</code></td>
                </tr>
                <tr>
                    <td><code>||=</code></td>
                    <td><code>x ||= y</code></td>
                    <td><code>x = x || (x = y)</code></td>
                </tr>
                <tr>
                    <td><code>??=</code></td>
                    <td><code>x ??= y</code></td>
                    <td><code>x = x ?? (x = y)</code></td>
                </tr>
            </tbody>
        </table>
    
        <h3>Penjelasan Operator Penugasan</h3>
    
        <h4>Operator <code>=</code></h4>
        <p>Operator penugasan sederhana (<code>=</code>) digunakan untuk memberikan nilai kepada variabel.</p>
        <pre><code>
        let x = 10;
        let x = 10 + y;
        </code></pre>
    
        <h4>Operator <code>+=</code></h4>
        <p>Operator penugasan penjumlahan (<code>+=</code>) menambahkan suatu nilai ke variabel.</p>
        <pre><code>
        let x = 10;
        x += 5;
        let text = "Hello";
        text += " World";
        </code></pre>
    
        <h4>Operator <code>-=</code></h4>
        <p>Operator penugasan pengurangan (<code>-=</code>) mengurangi suatu nilai dari variabel.</p>
        <pre><code>
        let x = 10;
        x -= 5;
        </code></pre>
    
        <h4>Operator <code>*=</code></h4>
        <p>Operator penugasan perkalian (<code>*=</code>) mengalikan suatu variabel dengan nilai tertentu.</p>
        <pre><code>
        let x = 10;
        x *= 5;
        </code></pre>
    
        <h4>Operator <code>**=</code></h4>
        <p>Operator penugasan eksponen (<code>**=</code>) menaikkan suatu variabel ke pangkat tertentu.</p>
        <pre><code>
        let x = 10;
        x **= 5;
        </code></pre>
    
        <h4>Operator <code>/=</code></h4>
        <p>Operator penugasan pembagian (<code>/=</code>) membagi suatu variabel dengan nilai tertentu.</p>
        <pre><code>
        let x = 10;
        x /= 5;
        </code></pre>
    
        <h4>Operator <code>%=</code></h4>
        <p>Operator penugasan modulus (<code>%=</code>) memberikan sisa pembagian dari suatu variabel.</p>
        <pre><code>
        let x = 10;
        x %= 5;
        </code></pre>
    
        <h4>Operator <code><< =</code></h4>
        <p>Operator penugasan geser kiri (<code><< =</code>) melakukan pergeseran bit ke kiri pada variabel.</p>
        <pre><code>
        let x = -100;
        x <<= 5;
        </code></pre>
    
        <h4>Operator <code>> =</code></h4>
        <p>Operator penugasan geser kanan (<code>> =</code>) melakukan pergeseran bit ke kanan pada variabel (signed).</p>
        <pre><code>
        let x = -100;
        x >>= 5;
        </code></pre>
    
        <h4>Operator <code>> >=</code></h4>
        <p>Operator penugasan geser kanan tak bertanda (<code>> >=</code>) melakukan pergeseran bit ke kanan tak bertanda pada variabel.</p>
        <pre><code>
        let x = -100;
        x >>>= 5;
        </code></pre>
    
        <h4>Operator <code>&=</code></h4>
        <p>Operator penugasan AND bitwise (<code>&=</code>) melakukan operasi AND bitwise pada dua operand dan memberikan hasilnya ke variabel.</p>
        <pre><code>
        let x = 10;
        x &= 5;
        </code></pre>
    
        <h4>Operator <code>|=</code></h4>
        <p>Operator penugasan OR bitwise (<code>|=</code>) melakukan operasi OR bitwise pada dua operand dan memberikan hasilnya ke variabel.</p>
        <pre><code>
        let x = 10;
        x |= 5;
        </code></pre>
    
        <h4>Operator <code>^=</code></h4>
        <p>Operator penugasan XOR bitwise (<code>^=</code>) melakukan operasi XOR bitwise pada dua operand dan memberikan hasilnya ke variabel.</p>
        <pre><code>
        let x = 10;
        x ^= 5;
        </code></pre>
    
        <h4>Operator <code>&&=</code></h4>
        <p>Operator penugasan AND logika (<code>&&=</code>) digunakan antara dua nilai. Jika nilai pertama bernilai benar, maka nilai kedua akan diberikan ke variabel.</p>
        <pre><code>
        let x = 10;
        x &&= 5;
        </code></pre>
        <p>Operator <code>&&=</code> diperkenalkan pada ES2020.</p>
    
        <h4>Operator <code>||=</code></h4>
        <p>Operator penugasan OR logika (<code>||=</code>) digunakan antara dua nilai. Jika nilai pertama bernilai salah, maka nilai kedua akan diberikan ke variabel.</p>
        <pre><code>
        let x = 10;
        x ||= 5;
        </code></pre>
        <p>Operator <code>||=</code> diperkenalkan pada ES2020.</p>
    
        <h4>Operator <code>??=</code></h4>
        <p>Operator penugasan Nullish Coalescing (<code>??=</code>) digunakan antara dua nilai. Jika nilai pertama bernilai <code>null</code> atau <code>undefined</code>, maka nilai kedua akan diberikan ke variabel.</p>
        <pre><code>
        let x;
        x ??= 5;
        </code></pre>
        <p>Operator <code>??=</code> diperkenalkan pada ES2020.</p>
        <br>
        <a href="#arithmetic" class="btn-prev">&larr; Previous</a>
        <a href="#data-types" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="data-types" class="content hidden">
        <h1>Tipe Data JavaScript</h1>
    
        <p>JavaScript memiliki <strong>8 Tipe Data</strong> yang berbeda:</p>
        <ul>
            <li><strong>String</strong></li>
            <li><strong>Number</strong></li>
            <li><strong>BigInt</strong></li>
            <li><strong>Boolean</strong></li>
            <li><strong>Undefined</strong></li>
            <li><strong>Null</strong></li>
            <li><strong>Symbol</strong></li>
            <li><strong>Object</strong></li>
        </ul>
    
        <h2>Tipe Data <strong>Object</strong></h2>
        <p>Tipe data object dapat berisi objek bawaan maupun objek yang didefinisikan oleh pengguna. Objek bawaan bisa berupa objek, array, tanggal, peta, set, intarrays, floatarrays, promises, dan lainnya.</p>
    
        <h3>Contoh:</h3>
        <pre><code>
    // Angka:
    let panjang = 16;
    let berat = 7.5;
    
    // String:
    let warna = "Kuning";
    let namaBelakang = "Johnson";
    
    // Boolean:
    let x = true;
    let y = false;
    
    // Object:
    const orang = {firstName:"John", lastName:"Doe"};
    
    // Array object:
    const mobil = ["Saab", "Volvo", "BMW"];
    
    // Object Date:
    const tanggal = new Date("2022-03-25");
        </code></pre>
    
        <p><strong>Catatan:</strong> Variabel JavaScript dapat menyimpan data dengan tipe apa saja.</p>
    
        <h2>Konsep Tipe Data</h2>
        <p>Dalam pemrograman, tipe data adalah konsep yang sangat penting. Untuk dapat beroperasi pada variabel, kita perlu mengetahui tipe data tersebut.</p>
    
        <p>Tanpa tipe data, komputer tidak dapat dengan aman memproses operasi berikut:</p>
        <pre><code>let x = 16 + "Volvo";</code></pre>
    
        <p>Apakah masuk akal untuk menambahkan "Volvo" ke angka enam belas? Apakah akan menghasilkan error atau menghasilkan suatu hasil? JavaScript akan memprosesnya menjadi:</p>
        <pre><code>let x = "16" + "Volvo";</code></pre>
    
        <h3>Contoh:</h3>
        <pre><code>let x = 16 + "Volvo"; // Hasilnya: "16Volvo"</code></pre>
    
        <h2>Tipe Data JavaScript Bersifat Dinamis</h2>
        <p>JavaScript memiliki tipe data dinamis, yang berarti variabel yang sama dapat digunakan untuk menyimpan tipe data yang berbeda.</p>
    
        <h3>Contoh:</h3>
        <pre><code>let x;       // Sekarang x adalah undefined
    x = 5;       // Sekarang x adalah Number
    x = "John";  // Sekarang x adalah String
        </code></pre>
    
        <h2>JavaScript Strings</h2>
        <p>String (atau teks) adalah serangkaian karakter seperti "John Doe". String ditulis dengan tanda kutip. Anda bisa menggunakan tanda kutip tunggal atau ganda:</p>
    
        <h3>Contoh:</h3>
        <pre><code>
    // Menggunakan tanda kutip ganda:
    let namaMobil1 = "Volvo XC60";
    
    // Menggunakan tanda kutip tunggal:
    let namaMobil2 = 'Volvo XC60';
        </code></pre>
    
        <p>Anda bisa menggunakan tanda kutip di dalam string, selama tidak sama dengan tanda kutip yang membungkus string tersebut:</p>
    
        <h3>Contoh:</h3>
        <pre><code>
    // Tanda kutip tunggal di dalam tanda kutip ganda:
    let jawab1 = "It's alright";
    
    // Tanda kutip tunggal di dalam tanda kutip ganda:
    let jawab2 = "He is called 'Johnny'";
    
    // Tanda kutip ganda di dalam tanda kutip tunggal:
    let jawab3 = 'He is called "Johnny"';
        </code></pre>
    
        <h2>JavaScript Numbers</h2>
        <p>Semua angka dalam JavaScript disimpan dalam format angka desimal (floating point). Angka dapat ditulis dengan atau tanpa angka desimal:</p>
    
        <h3>Contoh:</h3>
        <pre><code>
    // Dengan desimal:
    let x1 = 34.00;
    
    // Tanpa desimal:
    let x2 = 34;
        </code></pre>
    
        <h2>Notasi Eksponensial</h2>
        <p>Angka yang sangat besar atau sangat kecil dapat ditulis menggunakan notasi ilmiah (eksponensial):</p>
    
        <h3>Contoh:</h3>
        <pre><code>let y = 123e5;    // 12300000
    let z = 123e-5;   // 0.00123</code></pre>
    
        <h2>JavaScript BigInt</h2>
        <p>JavaScript BigInt adalah tipe data baru (ES2020) yang dapat digunakan untuk menyimpan nilai integer yang terlalu besar untuk direpresentasikan oleh tipe Number normal di JavaScript.</p>
    
        <h3>Contoh:</h3>
        <pre><code>let x = BigInt("123456789012345678901234567890");</code></pre>
    
        <h2>JavaScript Booleans</h2>
        <p>Tipe data Boolean hanya memiliki dua nilai: <code>true</code> atau <code>false</code>.</p>
    
        <h3>Contoh:</h3>
        <pre><code>let x = 5;
    let y = 5;
    let z = 6;
    (x == y)       // Menghasilkan true
    (x == z)       // Menghasilkan false</code></pre>
    
        <h2>JavaScript Arrays</h2>
        <p>Array dalam JavaScript ditulis dengan tanda kurung siku <code>[]</code>. Item dalam array dipisahkan dengan koma.</p>
    
        <h3>Contoh:</h3>
        <pre><code>const mobil = ["Saab", "Volvo", "BMW"];</code></pre>
    
        <h2>JavaScript Objects</h2>
        <p>Objek dalam JavaScript ditulis dengan tanda kurung kurawal <code>{}</code>. Properti objek ditulis sebagai pasangan nama:nilai, yang dipisahkan dengan koma.</p>
    
        <h3>Contoh:</h3>
        <pre><code>const orang = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};</code></pre>
    
        <h2>Operator <code>typeof</code></h2>
        <p>Anda dapat menggunakan operator <code>typeof</code> dalam JavaScript untuk mengetahui tipe dari suatu variabel. Operator <code>typeof</code> mengembalikan tipe data dari sebuah variabel atau ekspresi:</p>
    
        <h3>Contoh:</h3>
        <pre><code>typeof ""             // Menghasilkan "string"
    typeof "John"         // Menghasilkan "string"
    typeof "John Doe"     // Menghasilkan "string"
    
    typeof 0              // Menghasilkan "number"
    typeof 314            // Menghasilkan "number"
    typeof 3.14           // Menghasilkan "number"
    typeof (3)            // Menghasilkan "number"
    typeof (3 + 4)        // Menghasilkan "number"</code></pre>
    
        <h2>Undefined</h2>
        <p>Dalam JavaScript, variabel tanpa nilai akan memiliki nilai <code>undefined</code>. Tipe data untuk <code>undefined</code> juga adalah <code>undefined</code>.</p>
    
        <h3>Contoh:</h3>
        <pre><code>let mobil;    // Nilai adalah undefined, tipe adalah undefined</code></pre>
    
        <p>Variabel apa pun bisa dikosongkan dengan menetapkan nilai <code>undefined</code>. Tipe data juga akan menjadi <code>undefined</code>.</p>
    
        <h3>Contoh:</h3>
        <pre><code>mobil = undefined;    // Nilai adalah undefined, tipe adalah undefined</code></pre>
    
        <h2>Nilai Kosong</h2>
        <p>Nilai kosong tidak berhubungan dengan <code>undefined</code>. Sebuah string kosong memiliki nilai yang sah dan tipe yang sah.</p>
    
        <h3>Contoh:</h3>
        <pre><code>let mobil = "";    // Nilai adalah "", tipe adalah "string"</code></pre>
    
        <br>
        <a href="#assignment" class="btn-prev">&larr; Previous</a>
        <a href="#functions" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="functions" class="content hidden">
        <h1>Fungsi JavaScript</h1>
    
        <p>Fungsi JavaScript adalah blok kode yang dirancang untuk melakukan tugas tertentu.</p>
        <p>Fungsi JavaScript dieksekusi ketika "sesuatu" memanggilnya (mengeksekusinya).</p>
    
        <h2>Contoh Fungsi</h2>
        <p>Berikut adalah contoh fungsi untuk menghitung hasil perkalian dua angka:</p>
        <pre><code>
    // Fungsi untuk menghitung hasil perkalian p1 dan p2
    function myFunction(p1, p2) {
      return p1 * p2;
    }
        </code></pre>
    
        <h2>Sintaks Fungsi JavaScript</h2>
        <p>Fungsi JavaScript didefinisikan dengan kata kunci <code>function</code>, diikuti dengan nama fungsi, diikuti oleh tanda kurung <code>()</code>.</p>
        <p>Nama fungsi dapat berisi huruf, angka, garis bawah, dan tanda dolar (aturan yang sama seperti variabel).</p>
        <p>Tanda kurung dapat berisi nama parameter yang dipisahkan dengan koma:  
        <code>(parameter1, parameter2, ...)</code></p>
        <p>Berikut adalah contoh sintaksis fungsi dengan parameter:</p>
        <pre><code>
    function nama(parameter1, parameter2, parameter3) {
      // kode yang akan dieksekusi
    }
        </code></pre>
    
        <h2>Pemanggilan Fungsi</h2>
        <p>Kode di dalam fungsi akan dieksekusi ketika "sesuatu" memanggil (mengeksekusi) fungsi:</p>
        <ul>
            <li>Kapan sebuah peristiwa terjadi (misalnya, saat pengguna mengklik tombol).</li>
            <li>Kapan dipanggil (dari kode JavaScript).</li>
            <li>Secara otomatis (dipanggil sendiri).</li>
        </ul>
    
        <h2>Pengembalian Fungsi</h2>
        <p>Ketika JavaScript mencapai pernyataan <code>return</code>, fungsi akan berhenti dieksekusi.</p>
        <p>Fungsi sering kali menghitung nilai yang dikembalikan. Nilai yang dikembalikan ini akan "kembali" ke "panggilannya".</p>
    
        <h3>Contoh Mengembalikan Nilai dari Fungsi</h3>
        <pre><code>
    // Fungsi dipanggil, nilai yang dikembalikan akan disimpan di dalam x
    let x = myFunction(4, 3);
    
    function myFunction(a, b) {
      // Fungsi mengembalikan hasil perkalian a dan b
      return a * b;
    }
        </code></pre>
    
        <h2>Mengapa Menggunakan Fungsi?</h2>
        <p>Dengan fungsi, Anda dapat menggunakan kembali kode yang sama.</p>
        <p>Anda dapat menulis kode yang bisa digunakan berkali-kali.</p>
        <p>Anda dapat menggunakan kode yang sama dengan argumen yang berbeda untuk menghasilkan hasil yang berbeda.</p>
    
        <h2>Operator <code>()</code></h2>
        <p>Operator <code>()</code> memanggil (mengeksekusi) fungsi:</p>
        <h3>Contoh Mengubah Fahrenheit ke Celsius</h3>
        <pre><code>
    function toCelsius(fahrenheit) {
      return (5/9) * (fahrenheit - 32);
    }
    
    let nilai = toCelsius(77);
        </code></pre>
    
        <h3>Contoh Mengakses Fungsi dengan Parameter yang Salah</h3>
        <pre><code>
    function toCelsius(fahrenheit) {
      return (5/9) * (fahrenheit - 32);
    }
    
    let nilai = toCelsius();  // Akan menghasilkan NaN karena parameter tidak diberikan
        </code></pre>
    
        <h3>Contoh Mengakses Fungsi Tanpa <code>()</code></h3>
        <pre><code>
    function toCelsius(fahrenheit) {
      return (5/9) * (fahrenheit - 32);
    }
    
    let nilai = toCelsius;  // Mengembalikan fungsi, bukan hasilnya
        </code></pre>
    
        <h2>Fungsi Digunakan Sebagai Nilai Variabel</h2>
        <p>Fungsi dapat digunakan seperti variabel, dalam semua jenis rumus, penugasan, dan perhitungan.</p>
        <h3>Contoh Menggunakan Fungsi dalam Variabel</h3>
        <pre><code>
    let x = toCelsius(77);
    let teks = "Suhu adalah " + x + " Celsius";
        </code></pre>
    
        <p>Anda bisa langsung menggunakan fungsi tersebut sebagai nilai variabel:</p>
        <pre><code>
    let teks = "Suhu adalah " + toCelsius(77) + " Celsius";
        </code></pre>
    
        <h2>Variabel Lokal</h2>
        <p>Variabel yang dideklarasikan dalam fungsi JavaScript menjadi <strong>Lokal</strong> bagi fungsi tersebut.</p>
        <p>Variabel lokal hanya dapat diakses dari dalam fungsi.</p>
        <h3>Contoh Variabel Lokal dalam Fungsi</h3>
        <pre><code>
    // kode di sini TIDAK bisa menggunakan carName
    function myFunction() {
      let carName = "Volvo";
      // kode di sini BISA menggunakan carName
    }
    
    // kode di sini TIDAK bisa menggunakan carName
        </code></pre>
    
        <p>Karena variabel lokal hanya dikenali di dalam fungsi tempat variabel tersebut dideklarasikan, Anda bisa menggunakan variabel dengan nama yang sama di fungsi yang berbeda.</p>
        <p>Variabel lokal dibuat saat fungsi dimulai, dan dihapus setelah fungsi selesai.</p>
    
        <br>
        <a href="#data-types" class="btn-prev">&larr; Sebelumnya</a>
        <a href="#objects" class="btn-next">Berikutnya &rarr;</a>        
    </section>
    
    <section id="objects" class="content hidden">
        <h1>Obyek JavaScript</h1>
    
        <p>Dalam kehidupan nyata, objek adalah hal-hal seperti: rumah, mobil, orang, hewan, atau subjek lainnya. Begitu pula di JavaScript, objek digunakan untuk menyimpan berbagai data yang berhubungan satu sama lain.</p>
    
        <h2>Objek dalam Kehidupan Nyata</h2>
        <p>Berikut adalah contoh objek mobil:</p>
    
        <table>
            <tr>
                <th>Objek Mobil</th>
                <th>Properti</th>
                <th>Metode</th>
            </tr>
            <tr>
                <td>car.name</td>
                <td>Fiat</td>
                <td>car.start()</td>
            </tr>
            <tr>
                <td>car.model</td>
                <td>500</td>
                <td>car.drive()</td>
            </tr>
            <tr>
                <td>car.weight</td>
                <td>850kg</td>
                <td>car.brake()</td>
            </tr>
            <tr>
                <td>car.color</td>
                <td>Putih</td>
                <td>car.stop()</td>
            </tr>
        </table>
    
        <h2>Properti dan Metode Objek</h2>
        <p>Mobil dalam kehidupan nyata memiliki properti seperti berat dan warna. Objek mobil memiliki properti yang sama, tetapi nilainya berbeda dari satu mobil ke mobil lainnya. Metode objek seperti <code>start()</code>, <code>drive()</code>, <code>brake()</code>, dan <code>stop()</code> digunakan untuk melakukan aksi terhadap objek mobil.</p>
    
        <h2>Variabel JavaScript</h2>
        <p>Variabel JavaScript adalah wadah untuk nilai data. Misalnya, Anda dapat memberi nilai sederhana (Fiat) ke sebuah variabel:</p>
        <pre><code>let car = "Fiat";</code></pre>
    
        <h2>Objek JavaScript</h2>
        <p>Objek adalah variabel juga, tetapi objek bisa menyimpan banyak nilai sekaligus. Berikut adalah contoh objek mobil dengan beberapa properti:</p>
        <pre><code>
    const car = {type: "Fiat", model: "500", color: "putih"};
        </code></pre>
    
        <h2>Mendefinisikan Objek JavaScript</h2>
        <p>Untuk mendefinisikan objek JavaScript, ada beberapa cara, di antaranya menggunakan literal objek, kata kunci <code>new</code>, atau konstruktor objek:</p>
    
        <h3>Literal Objek</h3>
        <p>Literal objek adalah cara paling umum untuk mendefinisikan objek dalam JavaScript. Berikut adalah contoh pembuatan objek dengan properti:</p>
        <pre><code>
    const person = {
        firstName: "John",
        lastName: "Doe",
        age: 50,
        eyeColor: "blue"
    };
        </code></pre>
    
        <h3>Menggunakan Kata Kunci <code>new</code></h3>
        <p>Anda juga bisa membuat objek menggunakan kata kunci <code>new Object()</code>, namun metode ini tidak sepopuler menggunakan literal objek:</p>
        <pre><code>
    // Membuat Objek dengan 'new'
    const person = new Object();
    person.firstName = "John";
    person.lastName = "Doe";
    person.age = 50;
    person.eyeColor = "blue";
        </code></pre>
    
        <h2>Properti dan Metode Objek</h2>
        <p>Properti objek adalah nilai yang disimpan dalam objek, sedangkan metode adalah fungsi yang disimpan sebagai properti. Berikut adalah contoh metode dalam objek:</p>
        <pre><code>
    const person = {
        firstName: "John",
        lastName: "Doe",
        id: 5566,
        fullName: function() {
            return this.firstName + " " + this.lastName;
        }
    };
        </code></pre>
    
        <h2>Objek JavaScript adalah Mutable</h2>
        <p>Objek JavaScript bersifat mutable, yang berarti objek dapat diubah setelah dibuat. Berikut adalah contoh bagaimana objek dapat diubah:</p>
        <pre><code>
    const person = {
        firstName: "John",
        lastName: "Doe",
        age: 50,
        eyeColor: "blue"
    };
    const x = person;
    x.age = 10;  // Mengubah usia pada objek x dan person
        </code></pre>
    
        <p>Di JavaScript, hampir semua nilai adalah objek, kecuali nilai primitif seperti string, number, dan boolean.</p>
    
        <a href="#functions" class="btn-prev">&larr; Previous</a>
        <a href="#object-properties" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="object-properties" class="content hidden">
        <h1>Properti Objek JavaScript</h1>
    
        <p>Objek adalah kumpulan properti yang tidak terurut. Properti adalah bagian paling penting dari objek JavaScript. Properti dapat diubah, ditambahkan, dihapus, dan beberapa di antaranya bersifat hanya-baca.</p>
    
        <h2>Mengakses Properti Objek JavaScript</h2>
        <p>Sintaks untuk mengakses properti dari sebuah objek adalah:</p>
    
        <ul>
            <li><code>objectName.property</code></li>
            <p>Contoh:</p>
            <pre><code>
    let age = person.age;
            </code></pre>
    
            <li><code>objectName["property"]</code></li>
            <p>Contoh:</p>
            <pre><code>
    let age = person["age"];
            </code></pre>
    
            <li><code>objectName[expression]</code></li>
            <p>Contoh:</p>
            <pre><code>
    let age = person[x];
            </code></pre>
        </ul>
    
        <h2>Contoh Penggunaan Properti</h2>
        <p>Mengakses properti menggunakan dot notation:</p>
        <pre><code>
    person.firstname + " is " + person.age + " years old.";
        </code></pre>
    
        <p>Mengakses properti menggunakan bracket notation:</p>
        <pre><code>
    person["firstname"] + " is " + person["age"] + " years old.";
        </code></pre>
    
        <p>Mengakses properti menggunakan variabel:</p>
        <pre><code>
    let x = "firstname";
    let y = "age";
    person[x] + " is " + person[y] + " years old.";
        </code></pre>
    
        <h2>Menambahkan Properti Baru</h2>
        <p>Anda dapat menambahkan properti baru ke objek yang sudah ada dengan memberikan nilai pada properti tersebut:</p>
        <pre><code>
    person.nationality = "English";
        </code></pre>
    
        <h2>Menghapus Properti</h2>
        <p>Kata kunci <code>delete</code> digunakan untuk menghapus properti dari sebuah objek:</p>
        <pre><code>
    const person = {
      firstName: "John",
      lastName: "Doe",
      age: 50,
      eyeColor: "blue"
    };
    
    delete person.age;
        </code></pre>
        
        <p>Atau</p>
        <pre><code>
    delete person["age"];
        </code></pre>
    
        <h2>Catatan</h2>
        <p>Kata kunci <code>delete</code> akan menghapus baik nilai properti maupun properti itu sendiri. Setelah penghapusan, properti tidak dapat digunakan lagi hingga ditambahkan kembali.</p>
    
        <h2>Objek Bersarang</h2>
        <p>Nilai properti dalam objek dapat berupa objek lain.</p>
        <pre><code>
    myObj = {
      name: "John",
      age: 30,
      myCars: {
        car1: "Ford",
        car2: "BMW",
        car3: "Fiat"
      }
    };
        </code></pre>
    
        <p>Anda bisa mengakses objek yang bersarang menggunakan dot notation atau bracket notation:</p>
        <pre><code>
    myObj.myCars.car2;
    myObj.myCars["car2"];
    myObj["myCars"]["car2"];
        </code></pre>
    
        <p>Atau dengan menggunakan variabel:</p>
        <pre><code>
    let p1 = "myCars";
    let p2 = "car2";
    myObj[p1][p2];
        </code></pre>
    
        <h2>Referensi Lengkap Objek</h2>
        <p>Untuk referensi lengkap, kunjungi <strong>Complete JavaScript Object Reference</strong>.</p>
        <p>Referensi ini berisi deskripsi dan contoh dari semua properti dan metode objek.</p>
    
        <br>
        <a href="#object" class="btn-prev">&larr; Previous</a>
        <a href="#object-methods" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="object-methods" class="content hidden">
        <h1>Metode Objek JavaScript</h1>
    
        <p>Metode objek adalah aksi yang dapat dilakukan pada objek. Metode adalah definisi fungsi yang disimpan sebagai nilai properti.</p>
    
        <h2>Properti dan Nilai</h2>
        <p>Tabel berikut menunjukkan contoh properti dan nilai dalam objek:</p>
        <table border="1">
            <tr>
                <th>Properti</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>firstName</td>
                <td>John</td>
            </tr>
            <tr>
                <td>lastName</td>
                <td>Doe</td>
            </tr>
            <tr>
                <td>age</td>
                <td>50</td>
            </tr>
            <tr>
                <td>eyeColor</td>
                <td>blue</td>
            </tr>
            <tr>
                <td>fullName</td>
                <td>function() {return this.firstName + " " + this.lastName;}</td>
            </tr>
        </table>
    
        <h2>Contoh Objek dengan Metode</h2>
        <p>Contoh objek dengan metode <code>fullName</code>:</p>
        <pre><code>
    const person = {
      firstName: "John",
      lastName: "Doe",
      id: 5566,
      fullName: function() {
        return this.firstName + " " + this.lastName;
      }
    };
        </code></pre>
    
        <p>Pada contoh di atas, <code>this</code> mengacu pada objek <code>person</code>:</p>
        <ul>
            <li><code>this.firstName</code> berarti properti <code>firstName</code> dari objek <code>person</code>.</li>
            <li><code>this.lastName</code> berarti properti <code>lastName</code> dari objek <code>person</code>.</li>
        </ul>
    
        <h2>Mengakses Metode Objek</h2>
        <p>Anda mengakses metode objek dengan sintaks berikut:</p>
        <pre><code>
    objectName.methodName()
        </code></pre>
    
        <p>Jika Anda memanggil properti <code>fullName</code> dengan <code>()</code>, itu akan dieksekusi sebagai sebuah fungsi:</p>
        <pre><code>
    name = person.fullName();
        </code></pre>
    
        <p>Jika Anda mengakses properti <code>fullName</code> tanpa <code>()</code>, itu hanya akan mengembalikan definisi fungsi:</p>
        <pre><code>
    name = person.fullName;
        </code></pre>
    
        <h2>Menambahkan Metode ke dalam Objek</h2>
        <p>Menambahkan metode baru ke dalam objek sangat mudah:</p>
        <pre><code>
    person.name = function () {
      return this.firstName + " " + this.lastName;
    };
        </code></pre>
    
        <h2>Menggunakan Metode JavaScript</h2>
        <p>Contoh ini menggunakan metode <code>toUpperCase()</code> dari JavaScript untuk mengubah teks menjadi huruf kapital:</p>
        <pre><code>
    person.name = function () {
      return (this.firstName + " " + this.lastName).toUpperCase();
    };
        </code></pre>
    
        <br>
        <a href="#object-properties" class="btn-prev">&larr; Previous</a>
        <a href="#object-display" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="object-display" class="content hidden">
        <h1>Menampilkan Objek JavaScript</h1>
    
        <p>Bagaimana cara menampilkan objek JavaScript? Menampilkan sebuah objek JavaScript akan menghasilkan output berupa <code>[object Object]</code>.</p>
    
        <h2>Contoh</h2>
        <pre><code>
    // Membuat Objek
    const person = {
      name: "John",
      age: 30,
      city: "New York"
    };
    
    document.getElementById("demo").innerHTML = person;
        </code></pre>
    
        <p>Beberapa solusi untuk menampilkan objek JavaScript adalah sebagai berikut:</p>
    
        <h2>Menampilkan Properti Objek berdasarkan Nama</h2>
        <p>Properti dari sebuah objek dapat ditampilkan sebagai string:</p>
        <pre><code>
    // Membuat Objek
    const person = {
      name: "John",
      age: 30,
      city: "New York"
    };
    
    // Menampilkan Properti
    document.getElementById("demo").innerHTML =
    person.name + "," + person.age + "," + person.city;
        </code></pre>
    
        <h2>Menampilkan Properti Objek dalam Sebuah Loop</h2>
        <p>Properti dari sebuah objek dapat dikumpulkan dalam sebuah loop:</p>
        <pre><code>
    // Membuat Objek
    const person = {
      name: "John",
      age: 30,
      city: "New York"
    };
    
    // Membuat Teks
    let text = "";
    for (let x in person) {
      text += person[x] + " ";
    }
    
    // Menampilkan Teks
    document.getElementById("demo").innerHTML = text;
        </code></pre>
    
        <p><strong>Catatan:</strong> Anda harus menggunakan <code>person[x]</code> dalam loop. <code>person.x</code> tidak akan berfungsi (Karena <code>x</code> adalah variabel loop).</p>
    
        <h2>Menggunakan <code>Object.values()</code></h2>
        <p><code>Object.values()</code> membuat sebuah array dari nilai properti:</p>
        <pre><code>
    // Membuat Objek
    const person = {
      name: "John",
      age: 30,
      city: "New York"
    };
    
    // Membuat Array
    const myArray = Object.values(person);
    
    // Menampilkan Array
    document.getElementById("demo").innerHTML = myArray;
        </code></pre>
    
        <h2>Menggunakan <code>Object.entries()</code></h2>
        <p><code>Object.entries()</code> mempermudah penggunaan objek dalam loop:</p>
        <pre><code>
    const fruits = {Bananas: 300, Oranges: 200, Apples: 500};
    
    let text = "";
    for (let [fruit, value] of Object.entries(fruits)) {
      text += fruit + ": " + value + "<br>";
    }
        </code></pre>
    
        <h2>Menggunakan <code>JSON.stringify()</code></h2>
        <p>Objek JavaScript dapat diubah menjadi string dengan metode JSON <code>JSON.stringify()</code>.</p>
        <p><code>JSON.stringify()</code> disertakan dalam JavaScript dan didukung oleh semua browser utama.</p>
    
        <p><strong>Catatan:</strong> Hasilnya akan berupa string yang ditulis dalam notasi JSON:</p>
        <pre><code>
    {"name":"John","age":50,"city":"New York"}
        </code></pre>
    
        <h3>Contoh</h3>
        <pre><code>
    // Membuat Objek
    const person = {
      name: "John",
      age: 30,
      city: "New York"
    };
    
    // Mengubah Objek menjadi String
    let myString = JSON.stringify(person);
    
    // Menampilkan String
    document.getElementById("demo").innerHTML = myString;
        </code></pre>
    
        <br>
        <a href="#object-methods" class="btn-prev">&larr; Previous</a>
        <a href="#object-constructors" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="object-constructors" class="content hidden">
        <h1>Konstruktor Objek JavaScript</h1>
    
        <p>Konstruktor objek JavaScript digunakan untuk membuat objek baru berdasarkan tipe yang sama. Dengan konstruktor, kita dapat membuat banyak objek dengan struktur yang sama.</p>
        <p>Disarankan untuk memberi nama fungsi konstruktor dengan huruf pertama kapital.</p>
        
        <h2>Fungsi Konstruktor Objek</h2>
        <p>Kita dapat membuat objek menggunakan fungsi konstruktor. Berikut adalah contoh fungsi konstruktor untuk objek <code>Person</code>:</p>
        <pre><code>
        function Person(first, last, age, eye) {
          this.firstName = first;
          this.lastName = last;
          this.age = age;
          this.eyeColor = eye;
        }
        </code></pre>
        <p>Dengan konstruktor ini, kita dapat membuat objek <code>Person</code> baru seperti:</p>
        <pre><code>
        const myFather = new Person("John", "Doe", 50, "blue");
        const myMother = new Person("Sally", "Rally", 48, "green");
        const mySister = new Person("Anna", "Rally", 18, "green");
        const mySelf = new Person("Johnny", "Rally", 22, "green");
        </code></pre>
        
        <h2>Nilai Default Properti</h2>
        <p>Properti yang diberikan dalam konstruktor dapat memiliki nilai default. Berikut adalah contoh konstruktor dengan properti <code>nationality</code> yang memiliki nilai default "English":</p>
        <pre><code>
        function Person(first, last, age, eyecolor) {
          this.firstName = first;
          this.lastName = last;
          this.age = age;
          this.eyeColor = eyecolor;
          this.nationality = "English";  // Nilai default
        }
        </code></pre>
    
        <h2>Menambahkan Properti ke Objek</h2>
        <p>Menambahkan properti baru ke objek yang sudah dibuat sangat mudah:</p>
        <pre><code>
        myFather.nationality = "English";  // Menambahkan properti nationality
        </code></pre>
        <p>Catatan: Properti baru hanya akan ditambahkan ke <code>myFather</code>, bukan objek <code>Person</code> lainnya.</p>
    
        <h2>Menambahkan Properti ke Konstruktor</h2>
        <p>Untuk menambahkan properti baru ke semua objek yang dibuat dengan konstruktor, kita harus menambahkannya ke prototype konstruktor:</p>
        <pre><code>
        Person.prototype.nationality = "English";  // Properti ditambahkan ke prototype
        </code></pre>
    
        <h2>Metode Fungsi Konstruktor</h2>
        <p>Fungsi konstruktor juga dapat memiliki metode. Berikut adalah contoh fungsi konstruktor dengan metode <code>fullName()</code>:</p>
        <pre><code>
        function Person(first, last, age, eyecolor) {
          this.firstName = first;
          this.lastName = last;
          this.age = age;
          this.eyeColor = eyecolor;
          this.fullName = function() {
            return this.firstName + " " + this.lastName;
          };
        }
        </code></pre>
    
        <h2>Menambahkan Metode ke Objek</h2>
        <p>Menambahkan metode ke objek yang sudah dibuat sangat mudah. Berikut adalah contoh menambahkan metode <code>changeName()</code> ke objek <code>myMother</code>:</p>
        <pre><code>
        myMother.changeName = function (name) {
          this.lastName = name;
        };
        </code></pre>
    
        <h2>Menambahkan Metode ke Konstruktor</h2>
        <p>Untuk menambahkan metode baru ke semua objek yang dibuat dengan konstruktor, kita harus menambahkannya ke prototype konstruktor:</p>
        <pre><code>
        Person.prototype.changeName = function (name) {
          this.lastName = name;
        };
        </code></pre>
    
        <h2>Konstruktor JavaScript Bawaan</h2>
        <p>JavaScript memiliki konstruktor bawaan untuk berbagai objek:</p>
        <ul>
            <li><code>new Object()</code>  // Objek Object baru</li>
            <li><code>new Array()</code>   // Objek Array baru</li>
            <li><code>new Map()</code>     // Objek Map baru</li>
            <li><code>new Set()</code>     // Objek Set baru</li>
            <li><code>new Date()</code>    // Objek Date baru</li>
            <li><code>new RegExp()</code>  // Objek RegExp baru</li>
            <li><code>new Function()</code>// Objek Function baru</li>
        </ul>
    
        <h2>Tahukah Anda?</h2>
        <p>Beberapa tips untuk menulis kode JavaScript:</p>
        <ul>
            <li>Gunakan literal objek <code>{}</code> daripada <code>new Object()</code>.</li>
            <li>Gunakan literal array <code>[]</code> daripada <code>new Array()</code>.</li>
            <li>Gunakan literal pola <code>/()/</code> daripada <code>new RegExp()</code>.</li>
            <li>Gunakan ekspresi fungsi <code>() {}</code> daripada <code>new Function()</code>.</li>
        </ul>
    
        <h3>Contoh:</h3>
        <pre><code>
        "";            // string primitif
        0;             // angka primitif
        false;         // boolean primitif
    
        {};            // objek
        [];            // objek array
        /()/           // objek regexp
        function(){};  // objek fungsi
        </code></pre>
    
        <br>
        <a href="#object-display" class="btn-prev">&larr; Sebelumnya</a>
        <a href="#events" class="btn-next">Selanjutnya &rarr;</a>        
    </section>
    
    <section id="events" class="content hidden">
        <h1>Peristiwa JavaScript</h1>
    
        <p>Peristiwa HTML adalah "hal-hal" yang terjadi pada elemen HTML.</p>
        <p>Saat JavaScript digunakan dalam halaman HTML, JavaScript dapat "merespons" peristiwa-peristiwa ini.</p>
    
        <h2>Peristiwa HTML</h2>
        <p>Peristiwa HTML bisa berupa sesuatu yang dilakukan oleh browser, atau sesuatu yang dilakukan oleh pengguna.</p>
        <p>Berikut adalah beberapa contoh peristiwa HTML:</p>
        <ul>
            <li>Halaman web HTML telah selesai dimuat.</li>
            <li>Sebuah kolom input HTML diubah.</li>
            <li>Sebuah tombol HTML diklik.</li>
        </ul>
    
        <p>Seringkali, ketika peristiwa terjadi, Anda mungkin ingin melakukan sesuatu.</p>
        <p>JavaScript memungkinkan Anda untuk mengeksekusi kode saat peristiwa terdeteksi.</p>
        <p>HTML memungkinkan atribut pengelola peristiwa, dengan kode JavaScript, untuk ditambahkan ke elemen HTML.</p>
    
        <h3>Contoh Penulisan Atribut Peristiwa</h3>
        <p>Dengan tanda kutip tunggal:</p>
        <pre><code>&lt;element event='some JavaScript'&gt;</code></pre>
        <p>Dengan tanda kutip ganda:</p>
        <pre><code>&lt;element event="some JavaScript"&gt;</code></pre>
    
        <h3>Contoh Penggunaan Atribut onclick</h3>
        <p>Pada contoh berikut, sebuah atribut <code>onclick</code> (dengan kode) ditambahkan ke elemen <code>&lt;button&gt;</code>:</p>
        <pre><code>&lt;button onclick="document.getElementById('demo').innerHTML = Date()"&gt;Waktu Sekarang?&lt;/button&gt;</code></pre>
        <p>Pada contoh di atas, kode JavaScript mengubah konten elemen dengan <code>id="demo"</code>.</p>
    
        <h3>Contoh Menggunakan <code>this.innerHTML</code></h3>
        <pre><code>&lt;button onclick="this.innerHTML = Date()"&gt;Waktu Sekarang?&lt;/button&gt;</code></pre>
    
        <h3>Contoh Memanggil Fungsi</h3>
        <p>Kode JavaScript sering kali lebih panjang. Lebih umum untuk melihat atribut peristiwa yang memanggil fungsi:</p>
        <pre><code>&lt;button onclick="displayDate()"&gt;Waktu Sekarang?&lt;/button&gt;</code></pre>
    
        <h2>Peristiwa HTML yang Umum</h2>
        <p>Berikut adalah daftar beberapa peristiwa HTML yang umum:</p>
        <table>
            <thead>
                <tr>
                    <th>Peristiwa</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>onchange</code></td>
                    <td>Elemen HTML telah diubah</td>
                </tr>
                <tr>
                    <td><code>onclick</code></td>
                    <td>Pengguna mengklik elemen HTML</td>
                </tr>
                <tr>
                    <td><code>onmouseover</code></td>
                    <td>Pengguna menggerakkan mouse ke elemen HTML</td>
                </tr>
                <tr>
                    <td><code>onmouseout</code></td>
                    <td>Pengguna menggerakkan mouse menjauh dari elemen HTML</td>
                </tr>
                <tr>
                    <td><code>onkeydown</code></td>
                    <td>Pengguna menekan tombol keyboard</td>
                </tr>
                <tr>
                    <td><code>onload</code></td>
                    <td>Browser telah selesai memuat halaman</td>
                </tr>
            </tbody>
        </table>
    
        <h2>Pengelola Peristiwa JavaScript</h2>
        <p>Pengelola peristiwa dapat digunakan untuk menangani dan memverifikasi input pengguna, aksi pengguna, dan aksi browser:</p>
        <ul>
            <li>Hal-hal yang harus dilakukan setiap kali halaman dimuat.</li>
            <li>Hal-hal yang harus dilakukan ketika halaman ditutup.</li>
            <li>Tindakan yang harus dilakukan ketika pengguna mengklik tombol.</li>
            <li>Konten yang harus diverifikasi saat pengguna memasukkan data.</li>
            <li>Dan banyak lagi...</li>
        </ul>
    
        <h3>Metode Penggunaan Peristiwa</h3>
        <ul>
            <li>Atribut peristiwa HTML dapat mengeksekusi kode JavaScript secara langsung.</li>
            <li>Atribut peristiwa HTML dapat memanggil fungsi JavaScript.</li>
            <li>Anda dapat menetapkan fungsi pengelola peristiwa Anda sendiri ke elemen HTML.</li>
            <li>Anda dapat mencegah peristiwa dikirim atau ditangani.</li>
            <li>Dan banyak lagi...</li>
        </ul>
    
        <br>
        <a href="#object-constructors" class="btn-prev">&larr; Sebelumnya</a>
        <a href="#strings" class="btn-next">Selanjutnya &rarr;</a>
    </section>
    
    <section id="strings" class="content hidden">
        <h1>String JavaScript</h1>
    
        <p>String digunakan untuk menyimpan teks.</p>
    
        <h2>Menggunakan Tanda Kutip</h2>
        <p>String JavaScript adalah nol atau lebih karakter yang ditulis di dalam tanda kutip.</p>
        
        <p>Contoh:</p>
        <pre><code>
        let text = "John Doe";
        </code></pre>
    
        <p>Anda bisa menggunakan tanda kutip tunggal atau ganda:</p>
        <pre><code>
        let carName1 = "Volvo XC60";  // Tanda kutip ganda
        let carName2 = 'Volvo XC60';  // Tanda kutip tunggal
        </code></pre>
    
        <h3>Catatan</h3>
        <p>String yang dibuat dengan tanda kutip tunggal atau ganda berfungsi sama, tidak ada perbedaan antara keduanya.</p>
    
        <h2>Kutip di Dalam String</h2>
        <p>Anda dapat menggunakan kutip di dalam string, selama kutip tersebut tidak sama dengan kutip yang mengelilingi string tersebut:</p>
    
        <pre><code>
        let answer1 = "It's alright";
        let answer2 = "He is called 'Johnny'";
        let answer3 = 'He is called "Johnny"';
        </code></pre>
    
        <h2>Template String</h2>
        <p>Template diperkenalkan dengan ES6 (JavaScript 2016).</p>
        <p>Template adalah string yang dibungkus dengan backticks (<code>`</code>), seperti: <code>This is a template string</code>.</p>
        
        <p>Template memungkinkan penggunaan tanda kutip tunggal dan ganda di dalam string:</p>
        <pre><code>
        let text = `He's often called "Johnny"`;
        </code></pre>
    
        <h3>Catatan</h3>
        <p>Template tidak didukung di Internet Explorer.</p>
    
        <h2>Panjang String</h2>
        <p>Untuk menemukan panjang suatu string, gunakan properti <code>length</code> bawaan:</p>
        <pre><code>
        let text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        let length = text.length;
        </code></pre>
    
        <h2>Karakter Escape</h2>
        <p>Karena string harus ditulis di dalam tanda kutip, JavaScript akan salah mengartikan string ini:</p>
        <pre><code>
        let text = "We are the so-called "Vikings" from the north.";
        </code></pre>
        <p>String tersebut akan terpotong menjadi "We are the so-called ". Untuk mengatasi masalah ini, Anda bisa menggunakan karakter escape backslash.</p>
    
        <p>Karakter escape backslash (<code>\</code>) mengubah karakter khusus menjadi karakter string:</p>
        <table>
            <tr>
                <th>Kode</th>
                <th>Hasil</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>\'</code></td>
                <td>'</td>
                <td>Tanda kutip tunggal</td>
            </tr>
            <tr>
                <td><code>\"</code></td>
                <td>"</td>
                <td>Tanda kutip ganda</td>
            </tr>
            <tr>
                <td><code>\\</code></td>
                <td>\</td>
                <td>Backslash</td>
            </tr>
        </table>
    
        <p>Contoh:</p>
        <pre><code>
        let text = "We are the so-called \"Vikings\" from the north.";
        </code></pre>
        <pre><code>
        let text = 'It\'s alright.';
        </code></pre>
        <pre><code>
        let text = "The character \\ is called backslash.";
        </code></pre>
    
        <h2>Enam Karakter Escape Lainnya</h2>
        <table>
            <tr>
                <th>Kode</th>
                <th>Hasil</th>
            </tr>
            <tr>
                <td><code>\b</code></td>
                <td>Backspace</td>
            </tr>
            <tr>
                <td><code>\f</code></td>
                <td>Form Feed</td>
            </tr>
            <tr>
                <td><code>\n</code></td>
                <td>New Line</td>
            </tr>
            <tr>
                <td><code>\r</code></td>
                <td>Carriage Return</td>
            </tr>
            <tr>
                <td><code>\t</code></td>
                <td>Horizontal Tab</td>
            </tr>
            <tr>
                <td><code>\v</code></td>
                <td>Vertical Tab</td>
            </tr>
        </table>
    
        <h3>Catatan</h3>
        <p>Enam karakter escape di atas awalnya dirancang untuk mengontrol mesin ketik, teletype, dan mesin faks. Mereka tidak memiliki arti yang jelas dalam HTML.</p>
    
        <h2>Memecah Baris Panjang</h2>
        <p>Untuk keterbacaan, pemrogram sering kali lebih suka menghindari baris kode yang terlalu panjang.</p>
        <p>Cara aman untuk memecah sebuah pernyataan adalah setelah operator:</p>
        <pre><code>
        document.getElementById("demo").innerHTML = "Hello Dolly!";
        </code></pre>
        <p>Cara aman lainnya untuk memecah sebuah string adalah dengan menggunakan penambahan string:</p>
        <pre><code>
        document.getElementById("demo").innerHTML = "Hello " + "Dolly!";
        </code></pre>
    
        <h2>Template Strings</h2>
        <p>Template memungkinkan penggunaan string multiline:</p>
        <pre><code>
        let text =
        `The quick
        brown fox
        jumps over
        the lazy dog`;
        </code></pre>
    
        <h3>Catatan</h3>
        <p>Template tidak didukung di Internet Explorer.</p>
    
        <h2>String JavaScript Sebagai Objek</h2>
        <p>Biasanya, string JavaScript adalah nilai primitif, yang dibuat dari literal:</p>
        <pre><code>
        let x = "John";
        </code></pre>
    
        <p>Namun, string juga bisa didefinisikan sebagai objek menggunakan kata kunci <code>new</code>:</p>
        <pre><code>
        let y = new String("John");
        </code></pre>
    
        <p>Contoh:</p>
        <pre><code>
        let x = "John";
        let y = new String("John");
        </code></pre>
    
        <h2>Jangan Membuat Objek String</h2>
        <p>Jangan membuat objek String.</p>
        <p>Kata kunci <code>new</code> akan memperumit kode dan memperlambat kecepatan eksekusi.</p>
        <p>Objek string dapat menghasilkan hasil yang tidak terduga:</p>
        <pre><code>
        let x = "John";
        let y = new String("John");
        </code></pre>
    
        <p>Namun, saat menggunakan operator <code>===</code>, <code>x</code> dan <code>y</code> tidak akan sama:</p>
        <pre><code>
        let x = "John";
        let y = new String("John");
        </code></pre>
    
        <h3>Perhatikan perbedaan antara <code>(x == y)</code> dan <code>(x === y)</code>.</h3>
        <p>Apakah <code>(x == y)</code> benar atau salah?</p>
        <pre><code>
        let x = new String("John");
        let y = new String("John");
        </code></pre>
    
        <p>Apakah <code>(x === y)</code> benar atau salah?</p>
        <pre><code>
        let x = new String("John");
        let y = new String("John");
        </code></pre>
    
        <h3>Membandingkan dua objek JavaScript selalu mengembalikan <code>false</code>.</h3>
    
        <br>
        <a href="#events" class="btn-prev">&larr; Previous</a>
        <a href="#string-methods" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="string-methods" class="content hidden">
        <h1>Metode String JavaScript</h1>
        
        <p>String dalam JavaScript bersifat primitif dan tidak dapat diubah (immutable): Semua metode string menghasilkan string baru tanpa mengubah string asli.</p>
    
        <h2>Metode String Dasar</h2>
        <p>Berikut adalah beberapa metode dasar untuk bekerja dengan string di JavaScript:</p>
        <ul>
            <li><strong>Panjang String</strong></li>
            <li><strong>String charAt()</strong></li>
            <li><strong>String charCodeAt()</strong></li>
            <li><strong>String at()</strong></li>
            <li><strong>String [ ]</strong></li>
            <li><strong>String slice()</strong></li>
            <li><strong>String substring()</strong></li>
            <li><strong>String substr()</strong></li>
        </ul>
    
        <h3>Panjang String JavaScript</h3>
        <p>Properti <code>length</code> mengembalikan panjang string:</p>
        <pre><code>
    let text = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    let length = text.length;
        </code></pre>
    
        <h3>Mengambil Karakter String</h3>
        <p>Ada 4 metode untuk mengambil karakter dari string:</p>
        <ul>
            <li><strong>Metode at(position)</strong></li>
            <li><strong>Metode charAt(position)</strong></li>
            <li><strong>Metode charCodeAt(position)</strong></li>
            <li><strong>Menggunakan akses properti [ ]</strong></li>
        </ul>
    
        <h4>JavaScript String charAt()</h4>
        <p>Metode <code>charAt()</code> mengembalikan karakter di indeks (posisi) yang ditentukan dalam string:</p>
        <pre><code>
    let text = "HELLO WORLD";
    let char = text.charAt(0);  // Mengambil karakter pertama
        </code></pre>
    
        <h4>JavaScript String charCodeAt()</h4>
        <p>Metode <code>charCodeAt()</code> mengembalikan kode karakter di indeks yang ditentukan dalam string. Ini mengembalikan kode UTF-16 (angka antara 0 dan 65535):</p>
        <pre><code>
    let text = "HELLO WORLD";
    let char = text.charCodeAt(0);  // Mengambil kode karakter pertama
        </code></pre>
    
        <h4>JavaScript String at()</h4>
        <p>Metode <code>at()</code> yang diperkenalkan di ES2022:</p>
        <pre><code>
    const name = "W3Schools";
    let letter = name.at(2);  // Mengambil huruf ketiga
        </code></pre>
    
        <p>Kita juga bisa menggunakan indeks negatif:</p>
        <pre><code>
    let letter = name.at(-2);  // Mengambil huruf kedua dari akhir
        </code></pre>
    
        <h4>Akses Properti [ ]</h4>
        <p>Metode ini dapat digunakan untuk mengambil karakter dari string:</p>
        <pre><code>
    let text = "HELLO WORLD";
    let char = text[0];  // Mengambil karakter pertama
        </code></pre>
    
        <h3>Mengambil Bagian String</h3>
        <p>Ada 3 metode untuk mengambil bagian dari string:</p>
        <ul>
            <li><strong>slice(start, end)</strong></li>
            <li><strong>substring(start, end)</strong></li>
            <li><strong>substr(start, length)</strong></li>
        </ul>
    
        <h4>JavaScript String slice()</h4>
        <p>Metode <code>slice()</code> mengambil sebagian string dan mengembalikan bagian yang diambil dalam string baru:</p>
        <pre><code>
    let text = "Apple, Banana, Kiwi";
    let part = text.slice(7, 13);  // Mengambil "Banana"
        </code></pre>
    
        <h4>JavaScript String substring()</h4>
        <p>Metode <code>substring()</code> mirip dengan <code>slice()</code>. Perbedaannya adalah jika nilai start dan end kurang dari 0, mereka diperlakukan sebagai 0 di <code>substring()</code>:</p>
        <pre><code>
    let str = "Apple, Banana, Kiwi";
    let part = str.substring(7, 13);  // Mengambil "Banana"
        </code></pre>
    
        <h4>JavaScript String substr()</h4>
        <p>Metode <code>substr()</code> mirip dengan <code>slice()</code>. Perbedaannya adalah parameter kedua menentukan panjang bagian yang diambil:</p>
        <pre><code>
    let str = "Apple, Banana, Kiwi";
    let part = str.substr(7, 6);  // Mengambil "Banana"
        </code></pre>
    
        <h3>Mengubah Menjadi Huruf Kapital dan Huruf Kecil</h3>
        <p>String dapat diubah menjadi huruf kapital dengan <code>toUpperCase()</code> dan menjadi huruf kecil dengan <code>toLowerCase()</code>:</p>
    
        <h4>JavaScript String toUpperCase()</h4>
        <pre><code>
    let text1 = "Hello World!";
    let text2 = text1.toUpperCase();  // Mengubah menjadi "HELLO WORLD!"
        </code></pre>
    
        <h4>JavaScript String toLowerCase()</h4>
        <pre><code>
    let text1 = "Hello World!";
    let text2 = text1.toLowerCase();  // Mengubah menjadi "hello world!"
        </code></pre>
    
        <h3>JavaScript String concat()</h3>
        <p>Metode <code>concat()</code> menggabungkan dua atau lebih string:</p>
        <pre><code>
    let text1 = "Hello";
    let text2 = "World";
    let text3 = text1.concat(" ", text2);  // Menghasilkan "Hello World"
        </code></pre>
    
        <h3>JavaScript String trim()</h3>
        <p>Metode <code>trim()</code> menghapus spasi di kedua sisi string:</p>
        <pre><code>
    let text1 = "      Hello World!      ";
    let text2 = text1.trim();  // Menghasilkan "Hello World!"
        </code></pre>
    
        <h4>JavaScript String trimStart()</h4>
        <pre><code>
    let text1 = "     Hello World!     ";
    let text2 = text1.trimStart();  // Menghasilkan "Hello World!     "
        </code></pre>
    
        <h4>JavaScript String trimEnd()</h4>
        <pre><code>
    let text1 = "     Hello World!     ";
    let text2 = text1.trimEnd();  // Menghasilkan "     Hello World!"
        </code></pre>
    
        <h3>Padding String JavaScript</h3>
        <p>ECMAScript 2017 menambahkan dua metode string baru: <code>padStart()</code> dan <code>padEnd()</code> untuk menambah padding di awal dan akhir string:</p>
    
        <h4>JavaScript String padStart()</h4>
        <pre><code>
    let text = "5";
    let padded = text.padStart(4, "0");  // Menghasilkan "0005"
        </code></pre>
    
        <h4>JavaScript String padEnd()</h4>
        <pre><code>
    let text = "5";
    let padded = text.padEnd(4, "0");  // Menghasilkan "5000"
        </code></pre>
    
        <h3>JavaScript String repeat()</h3>
        <p>Metode <code>repeat()</code> mengembalikan string dengan beberapa salinan string:</p>
        <pre><code>
    let text = "Hello world!";
    let result = text.repeat(2);  // Menghasilkan "Hello world!Hello world!"
        </code></pre>
    
        <h3>Mengganti Konten String</h3>
    
        <h4>JavaScript String replace()</h4>
        <pre><code>
    let text = "Please visit Microsoft!";
    let newText = text.replace("Microsoft", "W3Schools");  // Menghasilkan "Please visit W3Schools!"
        </code></pre>
    
        <h4>JavaScript String replaceAll()</h4>
        <pre><code>
    text = text.replaceAll("Cats", "Dogs");  // Mengganti semua "Cats" dengan "Dogs"
        </code></pre>
    
        <h3>Mengubah String Menjadi Array</h3>
    
        <h4>JavaScript String split()</h4>
        <p>Metode <code>split()</code> mengonversi string menjadi array:</p>
        <pre><code>
    let result = text.split(",");  // Membagi berdasarkan koma
        </code></pre>
    
        <br>
        <a href="#strings" class="btn-prev">&larr; Previous</a>
        <a href="#string-search" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="string-search" class="content hidden">
        <h1>Metode Pencarian String JavaScript</h1>
    
        <p>Dalam JavaScript, ada beberapa metode yang dapat digunakan untuk mencari substring dalam sebuah string. Berikut adalah beberapa metode pencarian yang dapat Anda gunakan:</p>
    
        <ul>
            <li><a href="#indexOf">String indexOf()</a></li>
            <li><a href="#lastIndexOf">String lastIndexOf()</a></li>
            <li><a href="#search">String search()</a></li>
            <li><a href="#match">String match()</a></li>
            <li><a href="#matchAll">String matchAll()</a></li>
            <li><a href="#includes">String includes()</a></li>
            <li><a href="#startsWith">String startsWith()</a></li>
            <li><a href="#endsWith">String endsWith()</a></li>
        </ul>
    
        <h2 id="indexOf">JavaScript String indexOf()</h2>
        <p>Metode <code>indexOf()</code> mengembalikan indeks (posisi) dari kemunculan pertama sebuah string dalam string lain, atau mengembalikan -1 jika string tidak ditemukan:</p>
        <pre><code>
        let teks = "Silakan temukan di mana 'temukan' terjadi!";
        let indeks = teks.indexOf("temukan");
        </code></pre>
        <p>Catatan: JavaScript menghitung posisi dari nol. 0 adalah posisi pertama dalam string, 1 posisi kedua, 2 posisi ketiga, dan seterusnya.</p>
    
        <h2 id="lastIndexOf">JavaScript String lastIndexOf()</h2>
        <p>Metode <code>lastIndexOf()</code> mengembalikan indeks dari kemunculan terakhir teks tertentu dalam sebuah string:</p>
        <pre><code>
        let teks = "Silakan temukan di mana 'temukan' terjadi!";
        let indeks = teks.lastIndexOf("temukan");
        </code></pre>
        <p>Kedua metode <code>indexOf()</code> dan <code>lastIndexOf()</code> mengembalikan -1 jika teks tidak ditemukan. Kedua metode ini juga menerima parameter kedua sebagai posisi awal untuk pencarian.</p>
        <pre><code>
        let teks = "Silakan temukan di mana 'temukan' terjadi!";
        let indeks = teks.indexOf("temukan", 15);
        </code></pre>
        <p>Metode <code>lastIndexOf()</code> mencari dari belakang (dari akhir ke awal).</p>
    
        <h2 id="search">JavaScript String search()</h2>
        <p>Metode <code>search()</code> mencari string untuk string lain (atau ekspresi reguler) dan mengembalikan posisi kecocokan:</p>
        <pre><code>
        let teks = "Silakan temukan di mana 'temukan' terjadi!";
        teks.search("temukan");
        </code></pre>
        <p>Metode ini tidak menerima argumen posisi awal pencarian seperti <code>indexOf()</code> dan tidak dapat menggunakan ekspresi reguler yang lebih kuat seperti <code>indexOf()</code>.</p>
    
        <h2 id="match">JavaScript String match()</h2>
        <p>Metode <code>match()</code> mengembalikan sebuah array yang berisi hasil pencocokan sebuah string terhadap string lain (atau ekspresi reguler).</p>
        <pre><code>
        let teks = "Hujan di SPAIN tetap di tanah datar";
        teks.match("ain");
        </code></pre>
        <p>Cari secara global untuk "ain":</p>
        <pre><code>
        let teks = "Hujan di SPAIN tetap di tanah datar";
        teks.match(/ain/g);
        </code></pre>
        <p>Jika ekspresi reguler tidak menyertakan modifier <code>g</code> (pencarian global), <code>match()</code> hanya akan mengembalikan kecocokan pertama dalam string.</p>
    
        <h2 id="matchAll">JavaScript String matchAll()</h2>
        <p>Metode <code>matchAll()</code> mengembalikan sebuah iterator yang berisi hasil pencocokan sebuah string terhadap string lain (atau ekspresi reguler).</p>
        <pre><code>
        const iterator = teks.matchAll("Kucing");
        </code></pre>
        <p>Jika parameter adalah ekspresi reguler, maka flag <code>g</code> harus disertakan, jika tidak maka akan memunculkan TypeError.</p>
    
        <h2 id="includes">JavaScript String includes()</h2>
        <p>Metode <code>includes()</code> mengembalikan nilai <code>true</code> jika sebuah string mengandung nilai yang ditentukan. Jika tidak, mengembalikan <code>false</code>:</p>
        <pre><code>
        let teks = "Halo dunia, selamat datang di alam semesta.";
        teks.includes("dunia");
        </code></pre>
        <p>Metode ini bersifat sensitif terhadap huruf besar/kecil.</p>
    
        <h2 id="startsWith">JavaScript String startsWith()</h2>
        <p>Metode <code>startsWith()</code> mengembalikan nilai <code>true</code> jika sebuah string dimulai dengan nilai yang ditentukan. Jika tidak, mengembalikan <code>false</code>:</p>
        <pre><code>
        let teks = "Halo dunia, selamat datang di alam semesta.";
        teks.startsWith("Halo");
        </code></pre>
        <p>Metode ini juga sensitif terhadap huruf besar/kecil.</p>
    
        <h2 id="endsWith">JavaScript String endsWith()</h2>
        <p>Metode <code>endsWith()</code> mengembalikan nilai <code>true</code> jika sebuah string diakhiri dengan nilai yang ditentukan. Jika tidak, mengembalikan <code>false</code>:</p>
        <pre><code>
        let teks = "John Doe";
        teks.endsWith("Doe");
        </code></pre>
        <p>Metode ini juga bersifat sensitif terhadap huruf besar/kecil.</p>
    
        <br>
        <a href="#string-methods" class="btn-prev">&larr; Previous</a>
        <a href="#string-templates" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="string-templates" class="content hidden">
        <h1>Template String JavaScript</h1>
    
        <p>Template String adalah cara untuk membuat string dengan lebih mudah, mendukung interpolasi variabel, ekspresi, dan string multiline.</p>
        
        <h2>Sintaksis Back-Ticks</h2>
        <p>Template String menggunakan tanda back-ticks (<code>``</code>) daripada tanda kutip (<code>""</code>) untuk mendefinisikan sebuah string:</p>
        <pre><code>
    let teks = `Halo Dunia!`;
        </code></pre>
    
        <h2>Kutipan di Dalam String</h2>
        <p>Template String memungkinkan penggunaan tanda kutip tunggal dan ganda di dalam string:</p>
        <pre><code>
    let teks = `Dia sering dipanggil "Johnny"`;
        </code></pre>
    
        <h2>String Multiline</h2>
        <p>Template String memungkinkan pembuatan string yang melibatkan beberapa baris:</p>
        <pre><code>
    let teks =
    `Anjing cepat
    berwarna cokelat
    melompat di atas
    anjing yang malas`;
        </code></pre>
    
        <h2>Interpolasi</h2>
        <p>Template String menyediakan cara mudah untuk menyisipkan variabel dan ekspresi ke dalam string.</p>
        <p>Metode ini disebut interpolasi string. Sintaksisnya adalah: <code>${...}</code></p>
    
        <h2>Penggantian Variabel</h2>
        <p>Template String memungkinkan variabel untuk digunakan dalam string:</p>
        <pre><code>
    let namaDepan = "John";
    let namaBelakang = "Doe";
    
    let teks = `Selamat datang ${namaDepan}, ${namaBelakang}!`;
        </code></pre>
    
        <h2>Penggantian Ekspresi</h2>
        <p>Template String memungkinkan ekspresi untuk digunakan dalam string:</p>
        <pre><code>
    let harga = 10;
    let PPN = 0.25;
    
    let total = `Total: ${(harga * (1 + PPN)).toFixed(2)}`;
        </code></pre>
    
        <h2>Template HTML</h2>
        <p>Template String dapat digunakan untuk menghasilkan HTML:</p>
        <pre><code>
    let header = "Template Strings";
    let tags = ["template strings", "javascript", "es6"];
    
    let html = `<h2>${header}</h2><ul>`;
    for (const x of tags) {
      html += `<li>${x}</li>`;
    }
    
    html += `</ul>`;
        </code></pre>
    
        <h2>Dukungan Browser</h2>
        <p>Template Strings adalah fitur dari ES6 (JavaScript 2015). ES6 sepenuhnya didukung di semua browser modern sejak Juni 2017:</p>
        <ul>
            <li><strong>Chrome 51</strong> (Mei 2016)</li>
            <li><strong>Edge 15</strong> (April 2017)</li>
            <li><strong>Firefox 54</strong> (Juni 2017)</li>
            <li><strong>Safari 10</strong> (September 2016)</li>
            <li><strong>Opera 38</strong> (Juni 2016)</li>
        </ul>
        <p>Template Strings tidak didukung di Internet Explorer.</p>
    
        <br>
        <a href="#string-search" class="btn-prev">&larr; Previous</a>
        <a href="#numbers" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="numbers" class="content hidden">
        <h1>Angka dalam JavaScript</h1>
    
        <p>JavaScript hanya memiliki satu tipe angka. Angka dapat ditulis dengan atau tanpa desimal.</p>
        
        <h2>Angka dengan atau Tanpa Desimal</h2>
        <p>Contoh:</p>
        <pre><code>
        let x = 3.14;    // Angka dengan desimal
        let y = 3;       // Angka tanpa desimal
        </code></pre>
    
        <h2>Angka dalam Notasi Ilmiah</h2>
        <p>Angka yang sangat besar atau sangat kecil dapat ditulis dengan notasi ilmiah (eksponen):</p>
        <pre><code>
        let x = 123e5;    // 12300000
        let y = 123e-5;   // 0.00123
        </code></pre>
    
        <h2>Angka dalam JavaScript Selalu 64-bit Floating Point</h2>
        <p>Angka dalam JavaScript disimpan sebagai angka floating point presisi ganda (64-bit) sesuai dengan standar IEEE 754.</p>
        <p>Format ini menyimpan angka dalam 64 bit dengan komponen berikut:</p>
        <table>
            <tr>
                <th>Nilai (Fraction/Mantissa)</th>
                <th>Eksponen</th>
                <th>Tanda</th>
            </tr>
            <tr>
                <td>52 bit (0 - 51)</td>
                <td>11 bit (52 - 62)</td>
                <td>1 bit (63)</td>
            </tr>
        </table>
    
        <h2>Presisi Integer</h2>
        <p>Integer (angka tanpa titik desimal) akurat hingga 15 digit.</p>
        <pre><code>
        let x = 999999999999999;   // x akan menjadi 999999999999999
        let y = 9999999999999999;  // y akan menjadi 10000000000000000
        </code></pre>
        <p>Jumlah maksimum desimal adalah 17.</p>
    
        <h2>Presisi Floating</h2>
        <p>Aritmetika floating point tidak selalu 100% akurat:</p>
        <pre><code>
        let x = 0.2 + 0.1;
        </code></pre>
        <p>Untuk mengatasi masalah ini, kita bisa mengalikan dan membagi:</p>
        <pre><code>
        let x = (0.2 * 10 + 0.1 * 10) / 10;
        </code></pre>
    
        <h2>Menambahkan Angka dan String</h2>
        <p><strong>PERINGATAN!!</strong> JavaScript menggunakan operator <code>+</code> untuk penambahan dan konkatenasi.</p>
        <p>Jika Anda menambahkan dua angka, hasilnya akan berupa angka:</p>
        <pre><code>
        let x = 10;
        let y = 20;
        let z = x + y;
        </code></pre>
        <p>Jika Anda menambahkan dua string, hasilnya akan berupa konkatenasi string:</p>
        <pre><code>
        let x = "10";
        let y = "20";
        let z = x + y;
        </code></pre>
        <p>Jika Anda menambahkan angka dan string, hasilnya akan berupa konkatenasi string:</p>
        <pre><code>
        let x = 10;
        let y = "20";
        let z = x + y;
        </code></pre>
    
        <h2>String Numerik</h2>
        <p>String dalam JavaScript dapat memiliki konten numerik. JavaScript akan mencoba mengonversi string menjadi angka dalam operasi numerik:</p>
        <pre><code>
        let x = "100";
        let y = "10";
        let z = x / y;   // Hasil: 10
        </code></pre>
    
        <h2>NaN - Bukan Angka</h2>
        <p><code>NaN</code> adalah hasil dari operasi yang tidak valid dalam JavaScript, seperti pembagian dengan string non-numerik.</p>
        <pre><code>
        let x = 100 / "Apple";   // Hasil: NaN
        </code></pre>
        <p>Namun jika string tersebut numerik, hasilnya akan berupa angka:</p>
        <pre><code>
        let x = 100 / "10";   // Hasil: 10
        </code></pre>
        <p>Untuk memeriksa apakah nilai adalah NaN, Anda bisa menggunakan fungsi <code>isNaN()</code>:</p>
        <pre><code>
        isNaN(x);   // Hasil: true
        </code></pre>
    
        <h2>Infinity</h2>
        <p><code>Infinity</code> adalah nilai yang dikembalikan saat hasil perhitungan melampaui batas maksimum angka yang bisa diwakili JavaScript.</p>
        <pre><code>
        let x = 2 / 0;   // Hasil: Infinity
        let y = -2 / 0;  // Hasil: -Infinity
        </code></pre>
    
        <h2>Hexadecimal</h2>
        <p>JavaScript menganggap angka yang dimulai dengan <code>0x</code> sebagai angka hexadecimal:</p>
        <pre><code>
        let x = 0xFF;   // Hasil: 255
        </code></pre>
    
        <h2>Angka dalam JavaScript Sebagai Objek</h2>
        <p>Angka dalam JavaScript biasanya adalah nilai primitif. Namun, angka juga bisa didefinisikan sebagai objek menggunakan kata kunci <code>new</code>.</p>
        <pre><code>
        let y = new Number(123);
        </code></pre>
        <p>Namun, sebaiknya hindari penggunaan objek Number karena memperlambat eksekusi kode.</p>
    
        <br>
        <a href="#string-templates" class="btn-prev">&larr; Previous</a>
        <a href="#bigint" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="bigint" class="content hidden">
        <h1>BigInt JavaScript</h1>
    
        <p>Variabel <strong>BigInt</strong> di JavaScript digunakan untuk menyimpan nilai bilangan bulat yang terlalu besar untuk diwakili oleh <strong>Number</strong> biasa di JavaScript.</p>
    
        <h2>Akurasi Integer di JavaScript</h2>
        <p>Integer di JavaScript hanya akurat hingga 15 digit:</p>
        <pre><code>
        let x = 999999999999999;   // x akurat
        let y = 9999999999999999;  // y akan dibulatkan
        </code></pre>
    
        <p>Di JavaScript, semua angka disimpan dalam format floating-point 64-bit (standar IEEE 754). Dengan standar ini, angka besar tidak dapat diwakili secara tepat dan akan dibulatkan.</p>
    
        <p>Karena itu, JavaScript hanya dapat mewakili integer secara aman hingga angka berikut:</p>
        <ul>
            <li><strong>9007199254740991</strong> (2^53 - 1)</li>
            <li><strong>-9007199254740991</strong> (-(2^53 - 1))</li>
        </ul>
        <p>Nilai integer di luar rentang ini kehilangan presisi.</p>
    
        <h2>Cara Membuat BigInt</h2>
        <p>Untuk membuat <strong>BigInt</strong>, tambahkan huruf <strong>n</strong> di akhir angka atau gunakan <code>BigInt()</code>:</p>
        <pre><code>
        let x = 9999999999999999n;     // Membuat BigInt dengan menambahkan 'n'
        let y = BigInt(1234567890123456789012345); // Menggunakan BigInt()
        </code></pre>
    
        <h2>BigInt: Tipe Data Baru di JavaScript</h2>
        <p><strong>typeof</strong> dari sebuah <strong>BigInt</strong> adalah <code>"bigint"</code>.</p>
        <pre><code>
        let x = BigInt(999999999999999);
        let type = typeof x;  // "bigint"
        </code></pre>
    
        <p><strong>BigInt</strong> adalah tipe data numerik kedua di JavaScript (setelah <strong>Number</strong>).</p>
        <p>Dengan <strong>BigInt</strong>, jumlah tipe data yang didukung di JavaScript adalah 8, yaitu:</p>
        <ul>
            <li>String</li>
            <li>Number</li>
            <li>BigInt</li>
            <li>Boolean</li>
            <li>Undefined</li>
            <li>Null</li>
            <li>Symbol</li>
            <li>Object</li>
        </ul>
    
        <h2>Operator BigInt</h2>
        <p>Operator yang dapat digunakan pada <strong>Number</strong> juga dapat digunakan pada <strong>BigInt</strong>.</p>
        <pre><code>
        let x = 9007199254740995n;
        let y = 9007199254740995n;
        let z = x * y;
        </code></pre>
    
        <h2>Catatan</h2>
        <ul>
            <li>Aritmetika antara <strong>BigInt</strong> dan <strong>Number</strong> tidak diperbolehkan (karena konversi tipe akan kehilangan informasi).</li>
            <li>Geser kanan tanpa tanda (>>>) tidak dapat dilakukan pada <strong>BigInt</strong> (karena tidak memiliki lebar tetap).</li>
        </ul>
    
        <h2>Desimal pada BigInt</h2>
        <p><strong>BigInt</strong> tidak dapat memiliki angka desimal.</p>
        <pre><code>
        let x = 5n;
        let y = x / 2;  // Error: Tidak dapat mencampur BigInt dan tipe lain
        </code></pre>
        <p>Jika ingin membagi BigInt dengan angka desimal, lakukan konversi eksplisit:</p>
        <pre><code>
        let x = 5n;
        let y = Number(x) / 2;
        </code></pre>
    
        <h2>Notasi Hexadecimal, Oktal, dan Biner pada BigInt</h2>
        <p><strong>BigInt</strong> juga dapat ditulis dalam notasi hexadecimal, oktal, atau biner:</p>
        <pre><code>
        let hex = 0x20000000000003n;  // Angka dalam notasi hexadecimal
        let oct = 0o400000000000000003n;  // Angka dalam notasi oktal
        let bin = 0b100000000000000000000000000000000000000000000000000011n;  // Angka dalam notasi biner
        </code></pre>
    
        <h2>Rasa Penasaran tentang Presisi</h2>
        <p>Pembulatan dapat mempengaruhi keamanan program:</p>
        <pre><code>
        9007199254740992 === 9007199254740993; // Hasil: true !!!
        </code></pre>
    
        <h2>Dukungan Browser</h2>
        <p><strong>BigInt</strong> didukung di semua browser sejak September 2020:</p>
        <ul>
            <li>Chrome 67</li>
            <li>Edge 79</li>
            <li>Firefox 68</li>
            <li>Safari 14</li>
            <li>Opera 54</li>
        </ul>
    
        <h2>Angka Integer Aman Maksimum dan Minimum</h2>
        <p>ES6 menambahkan properti <strong>max</strong> dan <strong>min</strong> pada objek <strong>Number</strong>:</p>
        <ul>
            <li><strong>MAX_SAFE_INTEGER</strong></li>
            <li><strong>MIN_SAFE_INTEGER</strong></li>
        </ul>
        <pre><code>
        let x = Number.MAX_SAFE_INTEGER;
        let y = Number.MIN_SAFE_INTEGER;
        </code></pre>
    
        <h2>Metode Baru pada Number</h2>
        <p>ES6 juga menambahkan 2 metode baru pada objek <strong>Number</strong>:</p>
        <ul>
            <li><strong>Number.isInteger()</strong></li>
            <li><strong>Number.isSafeInteger()</strong></li>
        </ul>
    
        <h3>Metode <code>Number.isInteger()</code></h3>
        <p>Metode <code>Number.isInteger()</code> mengembalikan nilai <code>true</code> jika argumen adalah integer.</p>
        <pre><code>
        Number.isInteger(10);    // true
        Number.isInteger(10.5);  // false
        </code></pre>
    
        <h3>Metode <code>Number.isSafeInteger()</code></h3>
        <p><strong>Safe integer</strong> adalah integer yang dapat diwakili secara tepat sebagai angka presisi ganda.</p>
        <p>Metode <code>Number.isSafeInteger()</code> mengembalikan <code>true</code> jika argumen adalah integer yang aman.</p>
        <pre><code>
        Number.isSafeInteger(10);          // true
        Number.isSafeInteger(12345678901234567890); // false
        </code></pre>
        <p>Integer yang aman adalah semua integer dari -(2^53 - 1) hingga +(2^53 - 1).</p>
        <p>Contoh aman: <strong>9007199254740991</strong>. Contoh tidak aman: <strong>9007199254740992</strong>.</p>
    
        <br>
        <a href="#numbers" class="btn-prev">&larr; Previous</a>
        <a href="#number-methods" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="number-methods" class="content hidden">
        <h1>Metode Number di JavaScript</h1>
        
        <p>Metode-metode number ini dapat digunakan pada semua angka JavaScript:</p>
    
        <table>
            <thead>
                <tr>
                    <th>Metode</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>toString()</code></td>
                    <td>Mengembalikan angka sebagai string</td>
                </tr>
                <tr>
                    <td><code>toExponential()</code></td>
                    <td>Mengembalikan angka dalam notasi eksponensial</td>
                </tr>
                <tr>
                    <td><code>toFixed()</code></td>
                    <td>Mengembalikan angka dengan sejumlah desimal tertentu</td>
                </tr>
                <tr>
                    <td><code>toPrecision()</code></td>
                    <td>Mengembalikan angka dengan panjang tertentu</td>
                </tr>
                <tr>
                    <td><code>valueOf()</code></td>
                    <td>Mengembalikan angka sebagai angka</td>
                </tr>
            </tbody>
        </table>
    
        <h2>Metode <code>toString()</code></h2>
        <p>Metode <code>toString()</code> mengembalikan angka sebagai string.</p>
        <p>Semua metode number dapat digunakan pada tipe angka apa saja (literal, variabel, atau ekspresi):</p>
        <pre><code>
    let x = 123;
    x.toString();
    (123).toString();
    (100 + 23).toString();
        </code></pre>
    
        <h2>Metode <code>toExponential()</code></h2>
        <p>Metode <code>toExponential()</code> mengembalikan sebuah string, dengan angka dibulatkan dan ditulis dalam notasi eksponensial.</p>
        <p>Parameter mendefinisikan jumlah karakter setelah titik desimal:</p>
        <pre><code>
    let x = 9.656;
    x.toExponential(2);
    x.toExponential(4);
    x.toExponential(6);
        </code></pre>
        <p>Parameter ini bersifat opsional. Jika tidak ditentukan, JavaScript tidak akan membulatkan angka.</p>
    
        <h2>Metode <code>toFixed()</code></h2>
        <p>Metode <code>toFixed()</code> mengembalikan sebuah string, dengan angka ditulis dengan sejumlah desimal tertentu:</p>
        <pre><code>
    let x = 9.656;
    x.toFixed(0);
    x.toFixed(2);
    x.toFixed(4);
    x.toFixed(6);
        </code></pre>
        <p><code>toFixed(2)</code> sangat berguna untuk menangani angka yang berhubungan dengan uang.</p>
    
        <h2>Metode <code>toPrecision()</code></h2>
        <p>Metode <code>toPrecision()</code> mengembalikan sebuah string, dengan angka ditulis dengan panjang tertentu:</p>
        <pre><code>
    let x = 9.656;
    x.toPrecision();
    x.toPrecision(2);
    x.toPrecision(4);
    x.toPrecision(6);
        </code></pre>
    
        <h2>Metode <code>valueOf()</code></h2>
        <p>Metode <code>valueOf()</code> mengembalikan angka sebagai angka.</p>
        <pre><code>
    let x = 123;
    x.valueOf();
    (123).valueOf();
    (100 + 23).valueOf();
        </code></pre>
        <p>Di JavaScript, sebuah angka bisa berupa nilai primitif (tipe data = number) atau objek (tipe data = object).</p>
        <p>Metode <code>valueOf()</code> digunakan secara internal di JavaScript untuk mengonversi objek Number menjadi nilai primitif.</p>
        <p>Tidak ada alasan khusus untuk menggunakannya dalam kode Anda.</p>
    
        <h2>Mengonversi Variabel Menjadi Angka</h2>
        <p>Terdapat 3 metode JavaScript yang dapat digunakan untuk mengonversi variabel menjadi angka:</p>
    
        <table>
            <thead>
                <tr>
                    <th>Metode</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>Number()</code></td>
                    <td>Mengembalikan angka yang dikonversi dari argumennya</td>
                </tr>
                <tr>
                    <td><code>parseFloat()</code></td>
                    <td>Menganalisis argumennya dan mengembalikan angka bertitik desimal</td>
                </tr>
                <tr>
                    <td><code>parseInt()</code></td>
                    <td>Menganalisis argumennya dan mengembalikan angka bulat</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Metode <code>Number()</code></h3>
        <p>Metode <code>Number()</code> dapat digunakan untuk mengonversi variabel JavaScript menjadi angka:</p>
        <pre><code>
    Number(true);
    Number(false);
    Number("10");
    Number("  10");
    Number("10  ");
    Number(" 10  ");
    Number("10.33");
    Number("10,33");
    Number("10 33");
    Number("John");
        </code></pre>
        <p>Jika angka tidak dapat dikonversi, maka akan mengembalikan <code>NaN</code> (Not a Number).</p>
    
        <h3>Metode <code>Number()</code> Digunakan pada Tanggal</h3>
        <p>Metode <code>Number()</code> juga dapat mengonversi tanggal menjadi angka.</p>
        <pre><code>
    Number(new Date("1970-01-01"))
        </code></pre>
        <p>Catatan: Metode <code>Date()</code> mengembalikan jumlah milidetik sejak 1 Januari 1970.</p>
        <pre><code>
    Number(new Date("1970-01-02"))
    Number(new Date("2017-09-30"))
        </code></pre>
    
        <h3>Metode <code>parseInt()</code></h3>
        <p>Metode <code>parseInt()</code> menganalisis string dan mengembalikan angka bulat. Spasi diperbolehkan. Hanya angka pertama yang akan diambil:</p>
        <pre><code>
    parseInt("-10");
    parseInt("-10.33");
    parseInt("10");
    parseInt("10.33");
    parseInt("10 20 30");
    parseInt("10 years");
    parseInt("years 10");
        </code></pre>
        <p>Jika angka tidak dapat dikonversi, maka akan mengembalikan <code>NaN</code>.</p>
    
        <h3>Metode <code>parseFloat()</code></h3>
        <p>Metode <code>parseFloat()</code> menganalisis string dan mengembalikan angka dengan titik desimal. Spasi diperbolehkan. Hanya angka pertama yang akan diambil:</p>
        <pre><code>
    parseFloat("10");
    parseFloat("10.33");
    parseFloat("10 20 30");
    parseFloat("10 years");
    parseFloat("years 10");
        </code></pre>
        <p>Jika angka tidak dapat dikonversi, maka akan mengembalikan <code>NaN</code>.</p>
    
        <h2>Metode Objek Number</h2>
        <table>
            <thead>
                <tr>
                    <th>Metode</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>Number.isInteger()</code></td>
                    <td>Mengembalikan true jika argumen adalah sebuah bilangan bulat</td>
                </tr>
                <tr>
                    <td><code>Number.isSafeInteger()</code></td>
                    <td>Mengembalikan true jika argumen adalah bilangan bulat yang aman</td>
                </tr>
                <tr>
                    <td><code>Number.parseFloat()</code></td>
                    <td>Mengonversi string menjadi angka</td>
                </tr>
                <tr>
                    <td><code>Number.parseInt()</code></td>
                    <td>Mengonversi string menjadi angka bulat</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Metode <code>Number.isInteger()</code></h3>
        <p>Metode <code>Number.isInteger()</code> mengembalikan <code>true</code> jika argumen adalah bilangan bulat.</p>
        <pre><code>
    Number.isInteger(10);
    Number.isInteger(10.5);
        </code></pre>
    
        <h3>Metode <code>Number.isSafeInteger()</code></h3>
        <p>Bilangan bulat yang aman adalah bilangan bulat yang dapat diwakili secara tepat sebagai angka presisi ganda.</p>
        <p>Metode <code>Number.isSafeInteger()</code> mengembalikan <code>true</code> jika argumen adalah bilangan bulat yang aman.</p>
        <pre><code>
    Number.isSafeInteger(10);
    Number.isSafeInteger(12345678901234567890);
        </code></pre>
    
        <h3>Metode <code>Number.parseFloat()</code></h3>
        <p>Metode <code>Number.parseFloat()</code> menganalisis string dan mengembalikan angka.</p>
        <pre><code>
    Number.parseFloat("10");
    Number.parseFloat("10.33");
    Number.parseFloat("10 20 30");
    Number.parseFloat("10 years");
    Number.parseFloat("years 10");
        </code></pre>
    
        <h3>Metode <code>Number.parseInt()</code></h3>
        <p>Metode <code>Number.parseInt()</code> menganalisis string dan mengembalikan angka bulat.</p>
        <pre><code>
    Number.parseInt("-10");
    Number.parseInt("-10.33");
    Number.parseInt("10");
    Number.parseInt("10.33");
    Number.parseInt("10 20 30");
    Number.parseInt("10 years");
    Number.parseInt("years 10");
        </code></pre>
    
        <br>
        <a href="#bigint" class="btn-prev">&larr; Previous</a>
        <a href="#number-properties" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="number-properties" class="content hidden">
        <h1>Properti Number JavaScript</h1>
    
        <p>Properti Number di JavaScript memberikan informasi tentang berbagai angka yang tersedia dalam JavaScript, serta memberikan fitur yang dapat digunakan dalam perhitungan dan operasi matematika.</p>
    
        <h2>Tabel Properti Number</h2>
        <table>
            <thead>
                <tr>
                    <th>Properti</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>EPSILON</code></td>
                    <td>Selisih antara 1 dan angka terkecil yang lebih besar dari 1.</td>
                </tr>
                <tr>
                    <td><code>MAX_VALUE</code></td>
                    <td>Angka terbesar yang mungkin dalam JavaScript.</td>
                </tr>
                <tr>
                    <td><code>MIN_VALUE</code></td>
                    <td>Angka terkecil yang mungkin dalam JavaScript.</td>
                </tr>
                <tr>
                    <td><code>MAX_SAFE_INTEGER</code></td>
                    <td>Bilangan bulat aman maksimum (253 - 1).</td>
                </tr>
                <tr>
                    <td><code>MIN_SAFE_INTEGER</code></td>
                    <td>Bilangan bulat aman minimum -(253 - 1).</td>
                </tr>
                <tr>
                    <td><code>POSITIVE_INFINITY</code></td>
                    <td>Infinity (dikembalikan saat overflow).</td>
                </tr>
                <tr>
                    <td><code>NEGATIVE_INFINITY</code></td>
                    <td>Negative infinity (dikembalikan saat overflow).</td>
                </tr>
                <tr>
                    <td><code>NaN</code></td>
                    <td>Nilai "Not-a-Number" (Bukan Angka).</td>
                </tr>
            </tbody>
        </table>
    
        <h2>JavaScript EPSILON</h2>
        <p><code>Number.EPSILON</code> adalah selisih antara angka floating point terkecil yang lebih besar dari 1 dan 1.</p>
        <pre><code>
    let x = Number.EPSILON;
        </code></pre>
        <p><strong>Catatan:</strong> <code>Number.EPSILON</code> adalah fitur ES6, yang tidak bekerja di Internet Explorer.</p>
    
        <h2>JavaScript MAX_VALUE</h2>
        <p><code>Number.MAX_VALUE</code> adalah konstanta yang mewakili angka terbesar yang mungkin dalam JavaScript.</p>
        <pre><code>
    let x = Number.MAX_VALUE;
        </code></pre>
    
        <h2>Properti Number Tidak Dapat Digunakan pada Variabel</h2>
        <p>Properti Number milik Objek JavaScript Number. Properti ini hanya bisa diakses sebagai <code>Number.MAX_VALUE</code>. Menggunakan <code>x.MAX_VALUE</code>, di mana <code>x</code> adalah sebuah variabel atau nilai, akan mengembalikan <code>undefined</code>:</p>
        <pre><code>
    let x = 6;
    x.MAX_VALUE;  // Akan mengembalikan undefined
        </code></pre>
    
        <h2>JavaScript MIN_VALUE</h2>
        <p><code>Number.MIN_VALUE</code> adalah konstanta yang mewakili angka terkecil yang mungkin dalam JavaScript.</p>
        <pre><code>
    let x = Number.MIN_VALUE;
        </code></pre>
    
        <h2>JavaScript MAX_SAFE_INTEGER</h2>
        <p><code>Number.MAX_SAFE_INTEGER</code> mewakili bilangan bulat aman maksimum dalam JavaScript. <code>Number.MAX_SAFE_INTEGER</code> adalah (253 - 1).</p>
        <pre><code>
    let x = Number.MAX_SAFE_INTEGER;
        </code></pre>
    
        <h2>JavaScript MIN_SAFE_INTEGER</h2>
        <p><code>Number.MIN_SAFE_INTEGER</code> mewakili bilangan bulat aman minimum dalam JavaScript. <code>Number.MIN_SAFE_INTEGER</code> adalah -(253 - 1).</p>
        <pre><code>
    let x = Number.MIN_SAFE_INTEGER;
        </code></pre>
        <p><strong>Catatan:</strong> <code>MAX_SAFE_INTEGER</code> dan <code>MIN_SAFE_INTEGER</code> adalah fitur ES6, yang tidak bekerja di Internet Explorer.</p>
    
        <h2>JavaScript POSITIVE_INFINITY</h2>
        <p><code>Number.POSITIVE_INFINITY</code> mewakili Infinity.</p>
        <pre><code>
    let x = Number.POSITIVE_INFINITY;
        </code></pre>
        <p><code>POSITIVE_INFINITY</code> dikembalikan saat terjadi overflow:</p>
        <pre><code>
    let x = 1 / 0;  // Hasilnya akan Number.POSITIVE_INFINITY
        </code></pre>
    
        <h2>JavaScript NEGATIVE_INFINITY</h2>
        <p><code>Number.NEGATIVE_INFINITY</code> mewakili Negative Infinity.</p>
        <pre><code>
    let x = Number.NEGATIVE_INFINITY;
        </code></pre>
        <p><code>NEGATIVE_INFINITY</code> dikembalikan saat terjadi overflow:</p>
        <pre><code>
    let x = -1 / 0;  // Hasilnya akan Number.NEGATIVE_INFINITY
        </code></pre>
    
        <h2>JavaScript NaN - Not a Number</h2>
        <p><code>NaN</code> adalah kata kunci yang digunakan untuk menunjukkan nilai yang bukan angka (Not-a-Number) dalam JavaScript.</p>
        <pre><code>
    let x = Number.NaN;
        </code></pre>
        <p>Mencoba melakukan operasi aritmatika dengan string non-numerik akan menghasilkan <code>NaN</code>:</p>
        <pre><code>
    let x = 100 / "Apple";  // Hasilnya adalah NaN
        </code></pre>
    
        <br>
        <a href="#number-methods" class="btn-prev">&larr; Previous</a>
        <a href="#arrays" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="arrays" class="content hidden">
        <h1>JavaScript Arrays</h1>
    
        <p>Array adalah variabel khusus yang dapat menyimpan lebih dari satu nilai. Ini memungkinkan kita untuk menyimpan data dalam satu struktur yang mudah dikelola.</p>
        
        <h2>Contoh Array</h2>
        <p>Array dalam JavaScript dapat dibuat dengan sintaks:</p>
        <pre><code>const mobil = ["Saab", "Volvo", "BMW"];</code></pre>
        
        <h2>Mengapa Menggunakan Array?</h2>
        <p>Jika Anda memiliki daftar item, seperti daftar mobil, menyimpannya dalam variabel terpisah bisa terlihat seperti ini:</p>
        <pre><code>
    let mobil1 = "Saab";
    let mobil2 = "Volvo";
    let mobil3 = "BMW";
        </code></pre>
        <p>Namun, dengan array, Anda dapat menyimpan semua nilai tersebut dalam satu variabel:</p>
        <pre><code>const mobil = ["Saab", "Volvo", "BMW"];</code></pre>
    
        <h2>Membuat Array</h2>
        <p>Array dapat dibuat menggunakan literal array. Ini adalah cara yang paling mudah:</p>
        <pre><code>const nama_array = [item1, item2, ...];</code></pre>
    
        <p>Contoh deklarasi array menggunakan literal:</p>
        <pre><code>const mobil = ["Saab", "Volvo", "BMW"];</code></pre>
    
        <h2>Array dengan `new`</h2>
        <p>Anda juga bisa menggunakan kata kunci `new` untuk membuat array:</p>
        <pre><code>const mobil = new Array("Saab", "Volvo", "BMW");</code></pre>
        <p>Namun, lebih disarankan untuk menggunakan literal array untuk kemudahan dan keterbacaan.</p>
    
        <h2>Mengakses Elemen Array</h2>
        <p>Elemen array dapat diakses dengan merujuk ke nomor indeks:</p>
        <pre><code>const mobil = ["Saab", "Volvo", "BMW"];
    let mobilTerpilih = mobil[0];</code></pre>
        <p>Catatan: Indeks array dimulai dari 0. Indeks [0] adalah elemen pertama.</p>
    
        <h2>Mengubah Elemen Array</h2>
        <p>Anda dapat mengubah elemen array dengan merujuk pada indeks yang sesuai:</p>
        <pre><code>mobil[0] = "Opel";</code></pre>
    
        <h2>Array adalah Objek</h2>
        <p>Array adalah jenis objek khusus. Operator `typeof` mengembalikan "object" untuk array:</p>
        <pre><code>const person = ["John", "Doe", 46];
    console.log(typeof person); // "object"</code></pre>
    
        <h2>Properti dan Metode Array</h2>
        <p>Array memiliki berbagai properti dan metode bawaan, seperti:</p>
        <ul>
            <li><code>mobil.length</code> – Mengembalikan jumlah elemen dalam array.</li>
            <li><code>mobil.sort()</code> – Mengurutkan elemen array.</li>
        </ul>
    
        <h2>Menambahkan Elemen Array</h2>
        <p>Menambahkan elemen baru dapat dilakukan menggunakan metode <code>push()</code>:</p>
        <pre><code>const buah = ["Banana", "Orange", "Apple"];
    buah.push("Lemon");  // Menambahkan elemen baru ke dalam array</code></pre>
    
        <h2>Array Asosiatif</h2>
        <p>JavaScript tidak mendukung array dengan indeks bernama. Array selalu menggunakan indeks numerik:</p>
        <pre><code>const person = [];
    person[0] = "John";
    person[1] = "Doe";
    person[2] = 46;</code></pre>
    
        <h2>Peringatan!!</h2>
        <p>Jika Anda menggunakan indeks bernama dalam array, JavaScript akan mengubah array menjadi objek. Ini akan menyebabkan beberapa metode dan properti array tidak berfungsi dengan benar:</p>
        <pre><code>const person = [];
    person["firstName"] = "John";
    person["lastName"] = "Doe";</code></pre>
    
        <h2>Perbedaan Antara Array dan Objek</h2>
        <p>Array menggunakan indeks numerik, sedangkan objek menggunakan indeks bernama. Anda harus memilih array jika indeksnya numerik dan objek jika indeksnya berbentuk string.</p>
    
        <h2>Bagaimana Mengenali Sebuah Array?</h2>
        <p>Untuk memeriksa apakah sebuah variabel adalah array, Anda dapat menggunakan metode <code>Array.isArray()</code>:</p>
        <pre><code>Array.isArray(buah);</code></pre>
        <p>Atau menggunakan operator <code>instanceof</code>:</p>
        <pre><code>(buah instanceof Array);</code></pre>
    
        <h2>Array dan Objek Bersarang</h2>
        <p>Nilai dalam array bisa berupa objek, dan nilai dalam objek bisa berupa array. Ini memungkinkan kita untuk membuat array dan objek bersarang:</p>
        <pre><code>const myObj = {
      name: "John",
      age: 30,
      mobil: [
        {name:"Ford", models:["Fiesta", "Focus", "Mustang"]},
        {name:"BMW", models:["320", "X3", "X5"]},
        {name:"Fiat", models:["500", "Panda"]}]
    };</code></pre>
    
        <br>
        <a href="#number-properties" class="btn-prev">&larr; Previous</a>
        <a href="#array-methods" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="array-methods" class="content hidden">
        <h1>Metode Array JavaScript</h1>
    
        <p>Metode array JavaScript memungkinkan Anda untuk memanipulasi array dengan cara yang lebih fleksibel dan efisien.</p>
    
        <h2>Metode Array Dasar</h2>
    
        <h3>Panjang Array</h3>
        <p>Properti <code>length</code> mengembalikan panjang (ukuran) sebuah array:</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        let ukuran = buah.length;
        </code></pre>
    
        <h3>Array toString()</h3>
        <p>Metode <code>toString()</code> mengonversi array menjadi string dengan elemen-elemen array yang dipisahkan koma.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        document.getElementById("demo").innerHTML = buah.toString();
        </code></pre>
        <p>Hasil: <span id="demo">Pisang,Jeruk,Apel,Mangga</span></p>
    
        <h3>Array at()</h3>
        <p>Metode <code>at()</code> mengembalikan elemen berdasarkan indeks array. Ini adalah fitur baru di ES2022.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        let buahKetiga = buah.at(2);
        </code></pre>
    
        <h3>Array join()</h3>
        <p>Metode <code>join()</code> menggabungkan elemen-elemen array menjadi string. Anda dapat menentukan pemisah antara elemen array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        document.getElementById("demo").innerHTML = buah.join(" * ");
        </code></pre>
        <p>Hasil: <span id="demo">Pisang * Jeruk * Apel * Mangga</span></p>
    
        <h3>Array pop()</h3>
        <p>Metode <code>pop()</code> menghapus elemen terakhir dari array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.pop();
        </code></pre>
    
        <h3>Array push()</h3>
        <p>Metode <code>push()</code> menambahkan elemen baru ke akhir array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.push("Kiwi");
        </code></pre>
    
        <h2>Menggeser dan Memasukkan Elemen</h2>
    
        <h3>Array shift()</h3>
        <p>Metode <code>shift()</code> menghapus elemen pertama dari array dan menggeser elemen lainnya ke indeks yang lebih rendah.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.shift();
        </code></pre>
    
        <h3>Array unshift()</h3>
        <p>Metode <code>unshift()</code> menambahkan elemen baru ke awal array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.unshift("Lemon");
        </code></pre>
    
        <h2>Mengubah Elemen</h2>
        <p>Elemen-elemen array dapat diakses menggunakan nomor indeksnya, dimulai dari 0.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah[0] = "Kiwi";
        </code></pre>
    
        <h3>Array length</h3>
        <p>Anda dapat menambahkan elemen baru ke array dengan memanfaatkan properti <code>length</code>.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah[buah.length] = "Kiwi";
        </code></pre>
    
        <h3>Array delete()</h3>
        <p>Metode <code>delete()</code> akan meninggalkan "lubang" yang tidak terisi dalam array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        delete buah[0];
        </code></pre>
    
        <h2>Menggabungkan Array (Konkatenasi)</h2>
    
        <h3>Array concat()</h3>
        <p>Metode <code>concat()</code> digunakan untuk menggabungkan dua atau lebih array.</p>
        <pre><code>
        const anakPerempuan = ["Cecilie", "Lone"];
        const anakLakiLaki = ["Emil", "Tobias", "Linus"];
        
        const semuaAnak = anakPerempuan.concat(anakLakiLaki);
        </code></pre>
    
        <h3>Array copyWithin()</h3>
        <p>Metode <code>copyWithin()</code> menyalin elemen-elemen array ke posisi lain dalam array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.copyWithin(2, 0);
        </code></pre>
    
        <h2>Meratakan Array</h2>
    
        <h3>Array flat()</h3>
        <p>Metode <code>flat()</code> digunakan untuk meratakan array multidimensi menjadi array satu dimensi.</p>
        <pre><code>
        const arr = [[1, 2], [3, 4], [5, 6]];
        const arrBaru = arr.flat();
        </code></pre>
    
        <h3>Array flatMap()</h3>
        <p>Metode <code>flatMap()</code> pertama-tama memetakan semua elemen array, lalu membuat array baru dengan hasil pemetaan yang diratakan.</p>
        <pre><code>
        const arr = [1, 2, 3, 4, 5, 6];
        const arrBaru = arr.flatMap(x => [x, x * 10]);
        </code></pre>
    
        <h2>Memotong dan Memotong Bagian Array</h2>
    
        <h3>Array splice()</h3>
        <p>Metode <code>splice()</code> menambahkan atau menghapus elemen dari array.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        buah.splice(2, 0, "Lemon", "Kiwi");
        </code></pre>
    
        <h3>Array slice()</h3>
        <p>Metode <code>slice()</code> digunakan untuk memotong bagian array dan menghasilkan array baru.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Lemon", "Apel", "Mangga"];
        const citrus = buah.slice(1, 3);
        </code></pre>
    
        <h2>Otomatis ke String</h2>
        <p>JavaScript secara otomatis mengonversi array menjadi string yang dipisahkan koma ketika nilai primitif diharapkan, seperti saat output ke layar.</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        document.getElementById("demo").innerHTML = buah.toString();
        </code></pre>
    
        <p>Atau, cara lainnya:</p>
        <pre><code>
        const buah = ["Pisang", "Jeruk", "Apel", "Mangga"];
        document.getElementById("demo").innerHTML = buah;
        </code></pre>
    
        <p>Semua objek di JavaScript memiliki metode <code>toString()</code> yang secara otomatis digunakan ketika array diminta untuk diubah menjadi string.</p>
    
        <br>
        <a href="#arrays" class="btn-prev">&larr; Previous</a>
        <a href="#array-search" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="array-search" class="content hidden">
        <h1>Metode Pencarian Array di JavaScript</h1>
        <p>Metode pencarian array memungkinkan kita untuk mencari elemen dalam array dan menentukan posisinya atau memeriksa keberadaannya. Beberapa metode yang sering digunakan adalah <code>indexOf()</code>, <code>lastIndexOf()</code>, <code>includes()</code>, <code>find()</code>, <code>findIndex()</code>, <code>findLast()</code>, dan <code>findLastIndex()</code>.</p>
    
        <h2>Array indexOf()</h2>
        <p>Metode <code>indexOf()</code> digunakan untuk mencari nilai elemen dalam array dan mengembalikan posisi (indeks) elemen tersebut. Jika elemen ditemukan lebih dari satu kali, metode ini mengembalikan posisi pertama ditemukannya elemen tersebut.</p>
        <p>Contoh mencari elemen "Apple" dalam array:</p>
        <pre><code>
    const buah = ["Apple", "Jeruk", "Apple", "Mangga"];
    let posisi = buah.indexOf("Apple") + 1; // Menambahkan 1 untuk menyesuaikan dengan penomoran manusia
        </code></pre>
        
        <h3>Sintaks:</h3>
        <pre><code>array.indexOf(item, start)</code></pre>
        <p><strong>item</strong> (Wajib): Item yang akan dicari.<br>
           <strong>start</strong> (Opsional): Posisi mulai pencarian. Nilai negatif akan memulai pencarian dari posisi tersebut menghitung dari belakang, dan mencari hingga akhir array.</p>
        <p><strong>Catatan:</strong> Jika item tidak ditemukan, <code>indexOf()</code> mengembalikan -1.</p>
    
        <h2>Array lastIndexOf()</h2>
        <p>Metode <code>lastIndexOf()</code> berfungsi sama seperti <code>indexOf()</code>, tetapi mengembalikan posisi dari elemen yang ditemukan terakhir kali dalam array.</p>
        <p>Contoh mencari elemen "Apple" dalam array:</p>
        <pre><code>
    const buah = ["Apple", "Jeruk", "Apple", "Mangga"];
    let posisi = buah.lastIndexOf("Apple") + 1;
        </code></pre>
        
        <h3>Sintaks:</h3>
        <pre><code>array.lastIndexOf(item, start)</code></pre>
        <p><strong>item</strong> (Wajib): Item yang akan dicari.<br>
           <strong>start</strong> (Opsional): Posisi mulai pencarian. Nilai negatif akan memulai pencarian dari posisi tersebut menghitung dari belakang, dan mencari hingga awal array.</p>
    
        <h2>Array includes()</h2>
        <p>Metode <code>includes()</code> memungkinkan kita untuk memeriksa apakah elemen ada dalam array, bahkan untuk NaN (yang tidak dapat dilakukan dengan <code>indexOf()</code>).</p>
        <p>Contoh memeriksa apakah "Mangga" ada dalam array:</p>
        <pre><code>
    const buah = ["Banana", "Jeruk", "Apple", "Mangga"];
    buah.includes("Mangga"); // true
        </code></pre>
    
        <h3>Sintaks:</h3>
        <pre><code>array.includes(search-item)</code></pre>
    
        <h2>Array find()</h2>
        <p>Metode <code>find()</code> mengembalikan nilai elemen pertama yang memenuhi fungsi uji.</p>
        <p>Contoh mencari elemen pertama yang lebih besar dari 18:</p>
        <pre><code>
    const angka = [4, 9, 16, 25, 29];
    let pertama = angka.find(myFunction);
    
    function myFunction(value, index, array) {
      return value > 18;
    }
        </code></pre>
    
        <h3>Sintaks:</h3>
        <pre><code>array.find(callback)</code></pre>
        <p>Fungsi callback menerima 3 argumen: nilai elemen, indeks elemen, dan array itu sendiri.</p>
    
        <h2>Array findIndex()</h2>
        <p>Metode <code>findIndex()</code> mengembalikan indeks elemen pertama yang memenuhi fungsi uji.</p>
        <p>Contoh mencari indeks elemen pertama yang lebih besar dari 18:</p>
        <pre><code>
    const angka = [4, 9, 16, 25, 29];
    let pertama = angka.findIndex(myFunction);
    
    function myFunction(value, index, array) {
      return value > 18;
    }
        </code></pre>
    
        <h3>Sintaks:</h3>
        <pre><code>array.findIndex(callback)</code></pre>
    
        <h2>Array findLast()</h2>
        <p>Metode <code>findLast()</code> (yang diperkenalkan di ES2023) mengembalikan nilai elemen pertama yang memenuhi kondisi dari akhir array.</p>
        <p>Contoh:</p>
        <pre><code>
    const suhu = [27, 28, 30, 40, 42, 35, 30];
    let tinggi = suhu.findLast(x => x > 40);
        </code></pre>
    
        <h2>Array findLastIndex()</h2>
        <p>Metode <code>findLastIndex()</code> mengembalikan indeks elemen terakhir yang memenuhi kondisi dari akhir array.</p>
        <p>Contoh:</p>
        <pre><code>
    const suhu = [27, 28, 30, 40, 42, 35, 30];
    let posisi = suhu.findLastIndex(x => x > 40);
        </code></pre>
    
        <br>
        <a href="#array-methods" class="btn-prev">&larr; Previous</a>
        <a href="#array-sort" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="array-sort" class="content hidden">
        <h1>Pengurutan Array di JavaScript</h1>
        
        <p>Di JavaScript, array dapat diurutkan dalam berbagai cara, baik secara alfabetis, numerik, maupun acak. Berikut adalah beberapa metode yang digunakan untuk mengurutkan array dalam JavaScript.</p>
    
        <h2>Metode Pengurutan Array</h2>
        <ul>
            <li>Pengurutan Alfabetik</li>
            <li>Array <code>sort()</code></li>
            <li>Array <code>reverse()</code></li>
            <li>Array <code>toSorted()</code></li>
            <li>Array <code>toReversed()</code></li>
            <li>Pengurutan Objek</li>
        </ul>
    
        <h2>Pengurutan Array dengan <code>sort()</code></h2>
        <p>Metode <code>sort()</code> digunakan untuk mengurutkan array secara alfabetis.</p>
        <pre><code>
    const buah = ["Banana", "Jeruk", "Apple", "Mangga"];
    buah.sort();
        </code></pre>
    
        <h2>Membalikkan Array dengan <code>reverse()</code></h2>
        <p>Metode <code>reverse()</code> digunakan untuk membalikkan urutan elemen dalam array.</p>
        <pre><code>
    const buah = ["Banana", "Jeruk", "Apple", "Mangga"];
    buah.reverse();
        </code></pre>
    
        <h2>Penggabungan <code>sort()</code> dan <code>reverse()</code></h2>
        <p>Dengan menggabungkan <code>sort()</code> dan <code>reverse()</code>, Anda dapat mengurutkan array dalam urutan menurun.</p>
        <pre><code>
    const buah = ["Banana", "Jeruk", "Apple", "Mangga"];
    buah.sort();
    buah.reverse();
        </code></pre>
    
        <h2>Metode <code>toSorted()</code> dan <code>toReversed()</code></h2>
        <p>Metode <code>toSorted()</code> dan <code>toReversed()</code> ditambahkan di ES2023 untuk mengurutkan dan membalikkan array tanpa mempengaruhi array asli.</p>
        
        <h3>Contoh <code>toSorted()</code>:</h3>
        <pre><code>
    const bulan = ["Jan", "Feb", "Mar", "Apr"];
    const diurutkan = bulan.toSorted();
        </code></pre>
    
        <h3>Contoh <code>toReversed()</code>:</h3>
        <pre><code>
    const bulan = ["Jan", "Feb", "Mar", "Apr"];
    const dibalik = bulan.toReversed();
        </code></pre>
    
        <h2>Pengurutan Numerik</h2>
        <p>Secara default, <code>sort()</code> mengurutkan nilai sebagai string. Untuk pengurutan numerik, kita perlu menggunakan fungsi pembanding.</p>
        <pre><code>
    const poin = [40, 100, 1, 5, 25, 10];
    poin.sort(function(a, b){ return a - b; });
        </code></pre>
    
        <h2>Pengurutan Acak</h2>
        <p>Untuk mengurutkan array secara acak, kita dapat menggunakan <code>sort()</code> dengan fungsi pembanding acak.</p>
        <pre><code>
    const poin = [40, 100, 1, 5, 25, 10];
    poin.sort(function() { return 0.5 - Math.random(); });
        </code></pre>
    
        <h2>Metode Fisher-Yates untuk Pengurutan Acak</h2>
        <p>Metode yang lebih tepat untuk pengurutan acak adalah Fisher-Yates shuffle.</p>
        <pre><code>
    const poin = [40, 100, 1, 5, 25, 10];
    for (let i = poin.length - 1; i > 0; i--) {
      let j = Math.floor(Math.random() * (i + 1));
      let k = poin[i];
      poin[i] = poin[j];
      poin[j] = k;
    }
        </code></pre>
    
        <h2>Mencari Nilai Terendah dan Tertinggi dalam Array</h2>
        <p>Untuk menemukan nilai terendah atau tertinggi dalam array, kita bisa menggunakan beberapa metode, seperti <code>sort()</code> atau <code>Math.min()</code> dan <code>Math.max()</code>.</p>
    
        <h3>Menemukan Min dan Max dengan <code>sort()</code></h3>
        <pre><code>
    const poin = [40, 100, 1, 5, 25, 10];
    poin.sort(function(a, b){ return a - b; });
    // poin[0] berisi nilai terendah
    // poin[poin.length - 1] berisi nilai tertinggi
        </code></pre>
    
        <h3>Menemukan Min dan Max dengan <code>Math.min()</code> dan <code>Math.max()</code></h3>
        <pre><code>
    function myArrayMin(arr) {
      return Math.min.apply(null, arr);
    }
    
    function myArrayMax(arr) {
      return Math.max.apply(null, arr);
    }
        </code></pre>
    
        <h2>Pengurutan Array Objek</h2>
        <p>Array yang berisi objek juga dapat diurutkan dengan menulis fungsi pembanding untuk membandingkan properti objek.</p>
        <pre><code>
    const mobil = [
      {type: "Volvo", year: 2016},
      {type: "Saab", year: 2001},
      {type: "BMW", year: 2010}
    ];
    mobil.sort(function(a, b){ return a.year - b.year; });
        </code></pre>
    
        <h2>Pengurutan Array Stabil</h2>
        <p>Sejak ES2019, algoritma pengurutan pada array di JavaScript stabil, yang berarti elemen dengan nilai yang sama akan mempertahankan urutan relatif mereka.</p>
        <pre><code>
    const myArr = [
      {name: "X00", price: 100},
      {name: "X01", price: 100},
      {name: "X02", price: 100},
      {name: "X03", price: 100},
      {name: "X04", price: 110},
      {name: "X05", price: 110},
      {name: "X06", price: 110},
      {name: "X07", price: 110}
    ];
        </code></pre>
    
        <br>
        <a href="#array-search" class="btn-prev">&larr; Previous</a>
        <a href="#array-iteration" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="array-iteration" class="content hidden">
        <h1>Iterasi Array JavaScript</h1>
    
        <p>Metode iterasi array beroperasi pada setiap elemen array:</p>
        <ul>
            <li>Array forEach</li>
            <li>Array map()</li>
            <li>Array flatMap()</li>
            <li>Array filter()</li>
            <li>Array reduce()</li>
            <li>Array reduceRight()</li>
        </ul>
    
        <h2>Metode Array Lainnya</h2>
        <ul>
            <li>Metode Array Dasar</li>
            <li>Metode Pencarian Array</li>
            <li>Metode Pengurutan Array</li>
            <li>Array every()</li>
            <li>Array some()</li>
            <li>Array from()</li>
            <li>Array keys()</li>
            <li>Array entries()</li>
            <li>Array with()</li>
            <li>Spread Array (...) </li>
        </ul>
    
        <h2>JavaScript Array <code>forEach()</code></h2>
        <p>Metode <code>forEach()</code> memanggil fungsi (fungsi callback) sekali untuk setiap elemen array.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let txt = "";
    numbers.forEach(myFunction);
    
    function myFunction(value, index, array) {
      txt += value + "&lt;br&gt;";
    }
        </code></pre>
        <p>Contoh ini menggunakan parameter <code>value</code>. Berikut adalah penulisan ulang dengan hanya menggunakan <code>value</code>:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let txt = "";
    numbers.forEach(myFunction);
    
    function myFunction(value) {
      txt += value + "&lt;br&gt;";
    }
        </code></pre>
    
        <h2>JavaScript Array <code>map()</code></h2>
        <p>Metode <code>map()</code> membuat array baru dengan melakukan fungsi pada setiap elemen array. Metode <code>map()</code> tidak mengeksekusi fungsi untuk elemen array yang tidak memiliki nilai dan tidak mengubah array asli.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers1 = [45, 4, 9, 16, 25];
    const numbers2 = numbers1.map(myFunction);
    
    function myFunction(value, index, array) {
      return value * 2;
    }
        </code></pre>
        <p>Jika callback hanya menggunakan parameter <code>value</code>, parameter <code>index</code> dan <code>array</code> bisa diabaikan:</p>
        <pre><code>
    const numbers1 = [45, 4, 9, 16, 25];
    const numbers2 = numbers1.map(myFunction);
    
    function myFunction(value) {
      return value * 2;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>flatMap()</code></h2>
        <p>Metode <code>flatMap()</code> pertama-tama memetakan semua elemen array dan kemudian membuat array baru dengan meratakan array.</p>
        <p>Contoh:</p>
        <pre><code>
    const myArr = [1, 2, 3, 4, 5, 6];
    const newArr = myArr.flatMap((x) => x * 2);
        </code></pre>
    
        <h2>JavaScript Array <code>filter()</code></h2>
        <p>Metode <code>filter()</code> membuat array baru dengan elemen array yang lulus uji.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    const over18 = numbers.filter(myFunction);
    
    function myFunction(value) {
      return value > 18;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>reduce()</code></h2>
        <p>Metode <code>reduce()</code> menjalankan fungsi pada setiap elemen array untuk menghasilkan satu nilai.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let sum = numbers.reduce(myFunction);
    
    function myFunction(total, value) {
      return total + value;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>reduceRight()</code></h2>
        <p>Metode <code>reduceRight()</code> menjalankan fungsi pada setiap elemen array untuk menghasilkan satu nilai, tetapi bekerja dari kanan ke kiri dalam array.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let sum = numbers.reduceRight(myFunction);
    
    function myFunction(total, value) {
      return total + value;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>every()</code></h2>
        <p>Metode <code>every()</code> memeriksa apakah semua nilai array lulus uji.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let allOver18 = numbers.every(myFunction);
    
    function myFunction(value) {
      return value > 18;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>some()</code></h2>
        <p>Metode <code>some()</code> memeriksa apakah beberapa nilai array lulus uji.</p>
        <p>Contoh:</p>
        <pre><code>
    const numbers = [45, 4, 9, 16, 25];
    let someOver18 = numbers.some(myFunction);
    
    function myFunction(value) {
      return value > 18;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>from()</code></h2>
        <p>Metode <code>Array.from()</code> mengembalikan objek Array dari objek yang memiliki properti <code>length</code> atau objek iterable lainnya.</p>
        <p>Contoh:</p>
        <pre><code>
    Array.from("ABCDEFG");
        </code></pre>
    
        <h2>JavaScript Array <code>keys()</code></h2>
        <p>Metode <code>Array.keys()</code> mengembalikan objek Array Iterator dengan kunci dari sebuah array.</p>
        <p>Contoh:</p>
        <pre><code>
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    const keys = fruits.keys();
    
    for (let x of keys) {
      text += x + "&lt;br&gt;";
    }
        </code></pre>
    
        <h2>JavaScript Array <code>entries()</code></h2>
        <p>Metode <code>entries()</code> mengembalikan objek Array Iterator, yang berisi pasangan kunci/nilai.</p>
        <p>Contoh:</p>
        <pre><code>
    const fruits = ["Banana", "Orange", "Apple", "Mango"];
    const f = fruits.entries();
    
    for (let x of f) {
      document.getElementById("demo").innerHTML += x;
    }
        </code></pre>
    
        <h2>JavaScript Array <code>with()</code></h2>
        <p>Metode <code>Array.with()</code> ditambahkan pada ES2023 sebagai cara aman untuk memperbarui elemen dalam array tanpa mengubah array asli.</p>
        <p>Contoh:</p>
        <pre><code>
    const months = ["Januari", "Februari", "Mar", "April"];
    const myMonths = months.with(2, "Maret");
        </code></pre>
    
        <h2>JavaScript Array <code>Spread</code> (...)</h2>
        <p>Operator spread (<code>...</code>) memperluas elemen iterable (seperti array) menjadi elemen-elemen terpisah.</p>
        <p>Contoh:</p>
        <pre><code>
    const q1 = ["Jan", "Feb", "Mar"];
    const q2 = ["Apr", "Mei", "Jun"];
    const q3 = ["Jul", "Ags", "Sep"];
    const q4 = ["Okt", "Nov", "Des"];
    
    const year = [...q1, ...q2, ...q3, ...q4];
        </code></pre>
        
        <br>
        <a href="#array-sort" class="btn-prev">&larr; Previous</a>
        <a href="#array-const" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="array-const" class="content hidden">
        <h1>JavaScript Array Const</h1>
    
        <p><strong>ECMAScript 2015 (ES6)</strong><br>
        Pada tahun 2015, JavaScript memperkenalkan kata kunci baru yang penting: <code>const</code>.</p>
    
        <p>Sekarang sudah menjadi praktik umum untuk mendeklarasikan array menggunakan <code>const</code>:</p>
        <pre><code>
        const mobil = ["Saab", "Volvo", "BMW"];
        </code></pre>
    
        <h3>Tidak Bisa Direset Ulang</h3>
        <p>Array yang dideklarasikan dengan <code>const</code> tidak dapat di-assign ulang (dikasih nilai baru):</p>
        <pre><code>
        const mobil = ["Saab", "Volvo", "BMW"];
        mobil = ["Toyota", "Volvo", "Audi"];  // ERROR
        </code></pre>
    
        <h3>Array Bukan Konstanta</h3>
        <p>Kata kunci <code>const</code> bisa sedikit menyesatkan. <code>const</code> tidak mendefinisikan array yang konstan, tetapi mendefinisikan referensi konstan ke sebuah array.</p>
        <p>Karena itu, kita masih bisa mengubah elemen-elemen dalam array yang dideklarasikan dengan <code>const</code>.</p>
    
        <h3>Elemen Bisa Diubah</h3>
        <p>Anda masih bisa mengubah elemen dari array yang dideklarasikan dengan <code>const</code>:</p>
        <pre><code>
    // Anda bisa membuat array konstanta:
    const mobil = ["Saab", "Volvo", "BMW"];
    
    // Anda bisa mengubah elemen:
    mobil[0] = "Toyota";
    
    // Anda bisa menambah elemen:
    mobil.push("Audi");
        </code></pre>
    
        <h3>Dukungan Browser</h3>
        <p>Kata kunci <code>const</code> tidak didukung di Internet Explorer 10 atau versi sebelumnya.</p>
        <table>
            <thead>
                <tr>
                    <th>Browser</th>
                    <th>Versi</th>
                    <th>Tanggal Dukungan</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Chrome</td><td>49</td><td>Maret, 2016</td></tr>
                <tr><td>IE 11 / Edge</td><td>11 / Edge</td><td>Oktober, 2013</td></tr>
                <tr><td>Firefox</td><td>36</td><td>Februari, 2015</td></tr>
                <tr><td>Safari</td><td>10</td><td>September, 2016</td></tr>
                <tr><td>Opera</td><td>36</td><td>Maret, 2016</td></tr>
            </tbody>
        </table>
    
        <h3>Harus Diberi Nilai Saat Dideklarasikan</h3>
        <p>Variabel JavaScript yang menggunakan <code>const</code> harus diberi nilai saat dideklarasikan. Artinya, sebuah array yang dideklarasikan dengan <code>const</code> harus diinisialisasi pada saat deklarasi.</p>
        <p>Jika tidak diinisialisasi, akan muncul kesalahan sintaks:</p>
        <pre><code>
        const mobil;        // ERROR
        mobil = ["Saab", "Volvo", "BMW"];
        </code></pre>
    
        <h3>Scope Blok Const</h3>
        <p>Array yang dideklarasikan dengan <code>const</code> memiliki <strong>Block Scope</strong>.</p>
        <p>Artinya, array yang dideklarasikan di dalam suatu blok tidak sama dengan array yang dideklarasikan di luar blok tersebut:</p>
        <pre><code>
    const mobil = ["Saab", "Volvo", "BMW"];
    // Di sini mobil[0] adalah "Saab"
    {
      const mobil = ["Toyota", "Volvo", "BMW"];
      // Di sini mobil[0] adalah "Toyota"
    }
    // Di sini mobil[0] adalah "Saab"
        </code></pre>
    
        <h3>Redeclare Array</h3>
        <p>Mendeklarasikan ulang array yang menggunakan <code>var</code> diperbolehkan di mana saja dalam program, tetapi mendeklarasikan ulang atau mengubah array yang menggunakan <code>const</code> dalam scope yang sama atau blok yang sama <strong>tidak diperbolehkan</strong>:</p>
        <pre><code>
    var mobil = ["Volvo", "BMW"];     // Diperbolehkan
    const mobil = ["Volvo", "BMW"];   // Tidak diperbolehkan
    {
      var mobil = ["Volvo", "BMW"];   // Diperbolehkan
      const mobil = ["Volvo", "BMW"]; // Tidak diperbolehkan
    }
        </code></pre>
    
        <br>
        <a href="#array-iteration" class="btn-prev">&larr; Previous</a>
        <a href="#dates" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="dates" class="content hidden">
        <h1>Objek Tanggal JavaScript</h1>
    
        <p>Objek Tanggal JavaScript memungkinkan kita untuk bekerja dengan tanggal.</p>
    
        <h2>Contoh Pembuatan Objek Tanggal</h2>
        <p>Objek tanggal dibuat dengan konstruktor <code>new Date()</>.</p>
        <pre><code>
        const d = new Date();
        const d = new Date("2022-03-25");
        </code></pre>
    
        <h2>Output Tanggal JavaScript</h2>
        <p>Secara default, JavaScript akan menggunakan zona waktu browser dan menampilkan tanggal dalam bentuk string lengkap:</p>
        <pre><code>
        Fri Dec 27 2024 22:45:10 GMT+0700 (Waktu Indonesia Barat)
        </code></pre>
    
        <h2>Membuat Objek Tanggal</h2>
        <p>Objek Tanggal dibuat dengan konstruktor <code>new Date()</>.</p>
        <p>Ada 9 cara untuk membuat objek tanggal baru:</p>
        <ol>
            <li><code>new Date()</code></li>
            <li><code>new Date(date string)</code></li>
            <li><code>new Date(year, month)</code></li>
            <li><code>new Date(year, month, day)</code></li>
            <li><code>new Date(year, month, day, hours)</code></li>
            <li><code>new Date(year, month, day, hours, minutes)</code></li>
            <li><code>new Date(year, month, day, hours, minutes, seconds)</code></li>
            <li><code>new Date(year, month, day, hours, minutes, seconds, ms)</code></li>
            <li><code>new Date(milliseconds)</code></li>
        </ol>
    
        <h3>new Date()</h3>
        <p>Ini membuat objek tanggal dengan tanggal dan waktu saat ini:</p>
        <pre><code>
        const d = new Date();
        </code></pre>
    
        <h3>new Date(date string)</h3>
        <p>Ini membuat objek tanggal dari string tanggal:</p>
        <pre><code>
        const d = new Date("October 13, 2014 11:13:00");
        const d = new Date("2022-03-25");
        </code></pre>
    
        <h3>new Date(year, month, ...)</h3>
        <p>Ini membuat objek tanggal dengan tanggal dan waktu yang ditentukan. Urutan angka adalah tahun, bulan, hari, jam, menit, detik, dan milidetik:</p>
        <pre><code>
        const d = new Date(2018, 11, 24, 10, 33, 30, 0);
        </code></pre>
    
        <p>Catatan: JavaScript menghitung bulan mulai dari 0 hingga 11 (Januari = 0, Desember = 11).</p>
    
        <h3>Menentukan Tanggal dan Waktu</h3>
        <p>Menentukan bulan lebih dari 11 atau hari lebih dari jumlah hari dalam bulan tidak akan menghasilkan kesalahan, tetapi akan menambah overflow ke bulan atau tahun berikutnya:</p>
        <pre><code>
        const d = new Date(2018, 15, 24, 10, 33, 30); // Sama dengan:
        const d = new Date(2019, 3, 24, 10, 33, 30);
        </code></pre>
    
        <h3>Menentukan Tahun dengan 2 Digit</h3>
        <p>Tahun dengan dua digit atau satu digit akan diinterpretasikan sebagai tahun 19xx:</p>
        <pre><code>
        const d = new Date(99, 11, 24); // 1999
        const d = new Date(9, 11, 24);  // 1909
        </code></pre>
    
        <h2>JavaScript Menyimpan Tanggal sebagai Milidetik</h2>
        <p>JavaScript menyimpan tanggal sebagai jumlah milidetik sejak 1 Januari 1970, dengan waktu nol adalah 1 Januari 1970 00:00:00 UTC.</p>
    
        <h3>new Date(milliseconds)</h3>
        <p>Ini membuat objek tanggal baru berdasarkan jumlah milidetik dari waktu nol:</p>
        <pre><code>
        const d = new Date(100000000000); // 100.000.000.000 milidetik setelah 1 Januari 1970
        const d = new Date(-100000000000); // 100.000.000.000 milidetik sebelum 1 Januari 1970
        const d = new Date(24 * 60 * 60 * 1000); // 24 jam setelah 1 Januari 1970
        </code></pre>
    
        <h2>Metode Tanggal</h2>
        <p>Metode-metode berikut memungkinkan Anda untuk beroperasi dengan objek tanggal:</p>
        <ul>
            <li><code>toString()</code>: Menampilkan tanggal dalam bentuk string lengkap</li>
            <li><code>toDateString()</code>: Mengubah tanggal menjadi format yang lebih mudah dibaca</li>
            <li><code>toUTCString()</code>: Mengubah tanggal menjadi string menggunakan standar UTC</li>
            <li><code>toISOString()</code>: Mengubah tanggal menjadi string menggunakan standar ISO</li>
        </ul>
    
        <h3>Menampilkan Tanggal</h3>
        <p>JavaScript menampilkan tanggal secara default menggunakan metode <code>toString()</code>:</p>
        <pre><code>
        const d = new Date();
        d.toString(); // Output: Fri Dec 27 2024 22:45:10 GMT+0700 (Waktu Indonesia Barat)
        </code></pre>
    
        <p>Metode <code>toDateString()</code> mengubah tanggal menjadi format yang lebih mudah dibaca:</p>
        <pre><code>
        const d = new Date();
        d.toDateString(); // Output: Fri Dec 27 2024
        </code></pre>
    
        <p>Metode <code>toUTCString()</code> mengubah tanggal menjadi string menggunakan standar UTC:</p>
        <pre><code>
        const d = new Date();
        d.toUTCString(); // Output: Fri, 27 Dec 2024 15:45:10 GMT
        </code></pre>
    
        <p>Metode <code>toISOString()</code> mengubah tanggal menjadi string menggunakan standar ISO:</p>
        <pre><code>
        const d = new Date();
        d.toISOString(); // Output: 2024-12-27T15:45:10.000Z
        </code></pre>
    
        <br>
        <a href="#array-const" class="btn-prev">&larr; Previous</a>
        <a href="#date-formats" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="date-formats" class="content hidden">
        <h1>Format Tanggal JavaScript</h1>
    
        <p>Input Tanggal JavaScript umumnya memiliki 3 format berikut:</p>
        <table>
            <tr>
                <th>Tipe Tanggal</th>
                <th>Contoh</th>
            </tr>
            <tr>
                <td><strong>Tanggal ISO</strong></td>
                <td>"2015-03-25" (Standar Internasional)</td>
            </tr>
            <tr>
                <td><strong>Tanggal Pendek</strong></td>
                <td>"03/25/2015"</td>
            </tr>
            <tr>
                <td><strong>Tanggal Panjang</strong></td>
                <td>"Mar 25 2015" atau "25 Mar 2015"</td>
            </tr>
        </table>
    
        <p>Format ISO mengikuti standar yang ketat dalam JavaScript. Format lainnya tidak terlalu terdefinisi dengan baik dan bisa berbeda-beda tergantung browser.</p>
    
        <h2>Output Tanggal JavaScript</h2>
        <p>Terlepas dari format input, JavaScript secara default akan mengeluarkan tanggal dalam format string lengkap:</p>
        <pre><code>
        Fri Dec 27 2024 22:53:59 GMT+0700 (Waktu Indonesia Barat)
        </code></pre>
    
        <h2>Tanggal ISO JavaScript</h2>
        <p>ISO 8601 adalah standar internasional untuk representasi tanggal dan waktu.</p>
        <p>Sintaksis ISO 8601 (YYYY-MM-DD) juga merupakan format tanggal yang disarankan dalam JavaScript:</p>
    
        <h3>Contoh (Tanggal lengkap):</h3>
        <pre><code>
        const d = new Date("2015-03-25");
        </code></pre>
        <p>Tanggal yang dihitung akan disesuaikan dengan zona waktu Anda. Bergantung pada zona waktu Anda, hasilnya bisa berbeda antara 24 Maret dan 25 Maret.</p>
    
        <h3>Tanggal ISO (Tahun dan Bulan)</h3>
        <p>Tanggal ISO juga dapat ditulis tanpa menentukan hari (YYYY-MM):</p>
        <pre><code>
        const d = new Date("2015-03");
        </code></pre>
        <p>Hasilnya akan bervariasi antara 28 Februari dan 1 Maret tergantung zona waktu.</p>
    
        <h3>Tanggal ISO (Hanya Tahun)</h3>
        <p>Tanggal ISO dapat ditulis tanpa bulan dan hari (YYYY):</p>
        <pre><code>
        const d = new Date("2015");
        </code></pre>
        <p>Hasilnya akan bervariasi antara 31 Desember 2014 dan 1 Januari 2015 tergantung zona waktu.</p>
    
        <h3>Tanggal ISO (Tanggal dan Waktu)</h3>
        <p>Tanggal ISO juga dapat ditulis dengan menambahkan jam, menit, dan detik (YYYY-MM-DDTHH:MM:SSZ):</p>
        <pre><code>
        const d = new Date("2015-03-25T12:00:00Z");
        </code></pre>
        <p>Tanggal dan waktu dipisahkan dengan huruf T. Waktu UTC ditandai dengan huruf Z.</p>
        <p>Jika Anda ingin mengubah waktu relatif terhadap UTC, hapus huruf Z dan tambahkan +HH:MM atau -HH:MM:</p>
        <pre><code>
        const d = new Date("2015-03-25T12:00:00-06:30");
        </code></pre>
        <p>UTC (Waktu Universal Terkoordinasi) sama dengan GMT (Greenwich Mean Time).</p>
        <p>Melewatkan T atau Z dalam string tanggal-waktu dapat menghasilkan hasil yang berbeda di berbagai browser.</p>
    
        <h2>Zona Waktu</h2>
        <p>Ketika Anda mengatur sebuah tanggal tanpa menentukan zona waktu, JavaScript akan menggunakan zona waktu browser.</p>
        <p>Ketika Anda mengambil sebuah tanggal tanpa menentukan zona waktu, hasilnya akan dikonversi ke zona waktu browser.</p>
        <p>Dengan kata lain: Jika sebuah tanggal/waktu dibuat dalam GMT (Greenwich Mean Time), tanggal/waktu tersebut akan dikonversi ke CDT (Central US Daylight Time) jika pengguna mengakses dari wilayah Central US.</p>
    
        <h2>Tanggal Pendek JavaScript</h2>
        <p>Tanggal pendek ditulis dengan sintaks "MM/DD/YYYY" seperti ini:</p>
        <pre><code>
        const d = new Date("03/25/2015");
        </code></pre>
    
        <h3>Peringatan!</h3>
        <p>Di beberapa browser, bulan atau hari tanpa angka nol di depan bisa menyebabkan kesalahan:</p>
        <pre><code>
        const d = new Date("2015-3-25");
        </code></pre>
    
        <p>Perilaku dari format "YYYY/MM/DD" tidak terdefinisi dengan baik. Beberapa browser akan mencoba menebak formatnya, sementara beberapa lainnya akan mengembalikan <code>NaN</code> (Not a Number):</p>
        <pre><code>
        const d = new Date("2015/03/25");
        </code></pre>
    
        <p>Perilaku dari format "DD-MM-YYYY" juga tidak terdefinisi dengan baik. Beberapa browser akan mencoba menebak formatnya, sementara beberapa lainnya akan mengembalikan <code>NaN</code>:</p>
        <pre><code>
        const d = new Date("25-03-2015");
        </code></pre>
    
        <h2>Tanggal Panjang JavaScript</h2>
        <p>Tanggal panjang paling sering ditulis dengan sintaks "MMM DD YYYY" seperti ini:</p>
        <pre><code>
        const d = new Date("Mar 25 2015");
        </code></pre>
    
        <p>Bulan dan hari dapat ditulis dalam urutan apa pun:</p>
        <pre><code>
        const d = new Date("25 Mar 2015");
        </code></pre>
    
        <p>Bulan dapat ditulis dengan lengkap (January), atau disingkat (Jan):</p>
        <pre><code>
        const d = new Date("January 25 2015");
        const d = new Date("Jan 25 2015");
        </code></pre>
    
        <p>Koma diabaikan. Nama bulan tidak peka terhadap huruf besar/kecil:</p>
        <pre><code>
        const d = new Date("JANUARY, 25, 2015");
        </code></pre>
    
        <h2>Input Tanggal - Memparsing Tanggal</h2>
        <p>Jika Anda memiliki string tanggal yang valid, Anda dapat menggunakan metode <code>Date.parse()</code> untuk mengonversinya menjadi milidetik.</p>
        <p><code>Date.parse()</code> mengembalikan jumlah milidetik antara tanggal dan 1 Januari 1970:</p>
        <pre><code>
        let msec = Date.parse("March 21, 2012");
        </code></pre>
    
        <p>Anda kemudian dapat menggunakan jumlah milidetik ini untuk mengonversinya menjadi objek tanggal:</p>
        <pre><code>
        let msec = Date.parse("March 21, 2012");
        const d = new Date(msec);
        </code></pre>
    
        <br>
        <a href="#dates" class="btn-prev">&larr; Sebelumnya</a>
        <a href="#date-get-methods" class="btn-next">Selanjutnya &rarr;</a>        
    </section>
    
    <section id="date-get-methods" class="content hidden">
        <h1>Metode JavaScript untuk Mendapatkan Tanggal</h1>
    
        <p><strong>Konstruktor <code>new Date()</code></strong></p>
        <p>Di JavaScript, objek tanggal dibuat dengan <code>new Date()</code>.</p>
        <p><code>new Date()</code> mengembalikan objek tanggal dengan tanggal dan waktu saat ini.</p>
        
        <h2>Mendapatkan Waktu Saat Ini</h2>
        <p>Untuk mendapatkan waktu saat ini, kamu bisa menggunakan:</p>
        <pre><code>const date = new Date();</code></pre>
    
        <h2>Metode Get pada Date</h2>
        <p>Berikut adalah metode-metode yang dapat digunakan pada objek <code>Date</code>:</p>
        <table>
            <tr>
                <th>Metode</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>getFullYear()</code></td>
                <td>Mengambil tahun sebagai angka empat digit (yyyy)</td>
            </tr>
            <tr>
                <td><code>getMonth()</code></td>
                <td>Mengambil bulan sebagai angka (0-11)</td>
            </tr>
            <tr>
                <td><code>getDate()</code></td>
                <td>Mengambil hari sebagai angka (1-31)</td>
            </tr>
            <tr>
                <td><code>getDay()</code></td>
                <td>Mengambil hari dalam seminggu sebagai angka (0-6)</td>
            </tr>
            <tr>
                <td><code>getHours()</code></td>
                <td>Mengambil jam sebagai angka (0-23)</td>
            </tr>
            <tr>
                <td><code>getMinutes()</code></td>
                <td>Mengambil menit sebagai angka (0-59)</td>
            </tr>
            <tr>
                <td><code>getSeconds()</code></td>
                <td>Mengambil detik sebagai angka (0-59)</td>
            </tr>
            <tr>
                <td><code>getMilliseconds()</code></td>
                <td>Mengambil milidetik sebagai angka (0-999)</td>
            </tr>
            <tr>
                <td><code>getTime()</code></td>
                <td>Mengambil waktu (milidetik sejak 1 Januari 1970)</td>
            </tr>
        </table>
    
        <h3>Catatan:</h3>
        <ul>
            <li>Metode <code>get</code> di atas mengembalikan waktu lokal.</li>
            <li>Waktu dalam objek tanggal adalah statis dan tidak berubah (waktu saat objek dibuat, bukan waktu saat ini).</li>
        </ul>
    
        <h2>Metode <code>getFullYear()</code></h2>
        <p>Metode <code>getFullYear()</code> mengembalikan tahun dari sebuah tanggal sebagai angka empat digit.</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getFullYear(); // 2021
    
    const d = new Date();
    d.getFullYear(); // Tanggal saat ini
        </code></pre>
    
        <h2>Metode <code>getMonth()</code></h2>
        <p>Metode <code>getMonth()</code> mengembalikan bulan dari sebuah tanggal sebagai angka (0-11). Berikut adalah cara kerja bulan di JavaScript:</p>
        <ul>
            <li>Januari adalah bulan nomor 0.</li>
            <li>Februari adalah bulan nomor 1.</li>
            <li>Desember adalah bulan nomor 11.</li>
        </ul>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getMonth(); // 2 (Maret)
    
    const d = new Date();
    d.getMonth(); // Bulan saat ini
        </code></pre>
    
        <h2>Metode <code>getDate()</code></h2>
        <p>Metode <code>getDate()</code> mengembalikan hari dalam bulan dari sebuah tanggal sebagai angka (1-31).</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getDate(); // 25
    
    const d = new Date();
    d.getDate(); // Hari saat ini
        </code></pre>
    
        <h2>Metode <code>getHours()</code></h2>
        <p>Metode <code>getHours()</code> mengembalikan jam dari sebuah tanggal sebagai angka (0-23).</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getHours(); // Jam saat ini
    
    const d = new Date();
    d.getHours(); // Jam saat ini
        </code></pre>
    
        <h2>Metode <code>getMinutes()</code></h2>
        <p>Metode <code>getMinutes()</code> mengembalikan menit dari sebuah tanggal sebagai angka (0-59).</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getMinutes(); // Menit saat ini
    
    const d = new Date();
    d.getMinutes(); // Menit saat ini
        </code></pre>
    
        <h2>Metode <code>getSeconds()</code></h2>
        <p>Metode <code>getSeconds()</code> mengembalikan detik dari sebuah tanggal sebagai angka (0-59).</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getSeconds(); // Detik saat ini
    
    const d = new Date();
    d.getSeconds(); // Detik saat ini
        </code></pre>
    
        <h2>Metode <code>getMilliseconds()</code></h2>
        <p>Metode <code>getMilliseconds()</code> mengembalikan milidetik dari sebuah tanggal sebagai angka (0-999).</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getMilliseconds(); // Milidetik saat ini
    
    const d = new Date();
    d.getMilliseconds(); // Milidetik saat ini
        </code></pre>
    
        <h2>Metode <code>getDay()</code></h2>
        <p>Metode <code>getDay()</code> mengembalikan hari dalam seminggu dari sebuah tanggal sebagai angka (0-6), di mana hari 0 adalah Minggu.</p>
        <pre><code>
    const d = new Date("2021-03-25");
    d.getDay(); // 4 (Hari Kamis)
    
    const d = new Date();
    d.getDay(); // Hari saat ini
        </code></pre>
    
        <h2>Metode <code>getTime()</code></h2>
        <p>Metode <code>getTime()</code> mengembalikan jumlah milidetik sejak 1 Januari 1970.</p>
        <pre><code>
    const d = new Date("1970-01-01");
    d.getTime(); // 0
    
    const d = new Date("2021-03-25");
    d.getTime(); // Jumlah milidetik sejak 1 Januari 1970
    
    const d = new Date();
    d.getTime(); // Jumlah milidetik saat ini
        </code></pre>
    
        <h2>Metode <code>Date.now()</code></h2>
        <p><code>Date.now()</code> mengembalikan jumlah milidetik sejak 1 Januari 1970.</p>
        <pre><code>
    let ms = Date.now(); // Milidetik saat ini
        </code></pre>
    
        <p>Untuk menghitung jumlah tahun sejak 1 Januari 1970, gunakan kode berikut:</p>
        <pre><code>
    const minute = 1000 * 60;
    const hour = minute * 60;
    const day = hour * 24;
    const year = day * 365;
    
    let years = Math.round(Date.now() / year);
        </code></pre>
    
        <h2>Metode Get UTC pada Date</h2>
        <table>
            <tr>
                <th>Metode</th>
                <th>Sama Dengan</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>getUTCDate()</code></td>
                <td><code>getDate()</code></td>
                <td>Mengambil tanggal UTC</td>
            </tr>
            <tr>
                <td><code>getUTCFullYear()</code></td>
                <td><code>getFullYear()</code></td>
                <td>Mengambil tahun UTC</td>
            </tr>
            <tr>
                <td><code>getUTCMonth()</code></td>
                <td><code>getMonth()</code></td>
                <td>Mengambil bulan UTC</td>
            </tr>
            <tr>
                <td><code>getUTCDay()</code></td>
                <td><code>getDay()</code></td>
                <td>Mengambil hari dalam seminggu UTC</td>
            </tr>
            <tr>
                <td><code>getUTCHours()</code></td>
                <td><code>getHours()</code></td>
                <td>Mengambil jam UTC</td>
            </tr>
            <tr>
                <td><code>getUTCMinutes()</code></td>
                <td><code>getMinutes()</code></td>
                <td>Mengambil menit UTC</td>
            </tr>
            <tr>
                <td><code>getUTCSeconds()</code></td>
                <td><code>getSeconds()</code></td>
                <td>Mengambil detik UTC</td>
            </tr>
            <tr>
                <td><code>getUTCMilliseconds()</code></td>
                <td><code>getMilliseconds()</code></td>
                <td>Mengambil milidetik UTC</td>
            </tr>
        </table>
    
        <h2>Metode <code>getTimezoneOffset()</code></h2>
        <p>Metode <code>getTimezoneOffset()</code> mengembalikan selisih waktu (dalam menit) antara waktu lokal dan waktu UTC.</p>
        <pre><code>
    let diff = d.getTimezoneOffset(); // Selisih waktu lokal dengan UTC
        </code></pre>
    
        <br>
        <a href="#date-formats" class="btn-prev">&larr; Previous</a>
        <a href="#date-set-methods" class="btn-next">Next &rarr;</a>
    </section>
    
    <section id="date-set-methods" class="content hidden">
        <h1>Metode Set Date JavaScript</h1>
    
        <p>Metode Set Date memungkinkan kamu untuk mengatur nilai tanggal (tahun, bulan, hari, jam, menit, detik, milidetik) pada objek <code>Date</code>.</p>
    
        <h2>Metode Set Date</h2>
        <p>Metode Set Date digunakan untuk mengatur bagian dari tanggal:</p>
        <table>
            <tr>
                <th>Metode</th>
                <th>Deskripsi</th>
            </tr>
            <tr>
                <td><code>setDate()</code></td>
                <td>Mengatur hari sebagai angka (1-31)</td>
            </tr>
            <tr>
                <td><code>setFullYear()</code></td>
                <td>Mengatur tahun (opsional bulan dan hari)</td>
            </tr>
            <tr>
                <td><code>setHours()</code></td>
                <td>Mengatur jam (0-23)</td>
            </tr>
            <tr>
                <td><code>setMilliseconds()</code></td>
                <td>Mengatur milidetik (0-999)</td>
            </tr>
            <tr>
                <td><code>setMinutes()</code></td>
                <td>Mengatur menit (0-59)</td>
            </tr>
            <tr>
                <td><code>setMonth()</code></td>
                <td>Mengatur bulan (0-11)</td>
            </tr>
            <tr>
                <td><code>setSeconds()</code></td>
                <td>Mengatur detik (0-59)</td>
            </tr>
            <tr>
                <td><code>setTime()</code></td>
                <td>Mengatur waktu (milidetik sejak 1 Januari 1970)</td>
            </tr>
        </table>
    
        <h2>Metode <code>setFullYear()</code></h2>
        <p>Metode <code>setFullYear()</code> digunakan untuk mengatur tahun dari sebuah objek tanggal. Berikut adalah contoh mengatur tahun menjadi 2020:</p>
        <pre><code>
    const d = new Date();
    d.setFullYear(2020);
        </code></pre>
    
        <p>Metode <code>setFullYear()</code> juga bisa mengatur bulan dan hari secara opsional:</p>
        <pre><code>
    const d = new Date();
    d.setFullYear(2020, 11, 3); // Mengatur tahun 2020, bulan Desember (bulan ke-11), dan hari ke-3
        </code></pre>
    
        <h2>Metode <code>setMonth()</code></h2>
        <p>Metode <code>setMonth()</code> digunakan untuk mengatur bulan dari objek tanggal (0-11), di mana Januari adalah bulan ke-0 dan Desember adalah bulan ke-11.</p>
        <pre><code>
    const d = new Date();
    d.setMonth(11); // Mengatur bulan Desember
        </code></pre>
    
        <h2>Metode <code>setDate()</code></h2>
        <p>Metode <code>setDate()</code> digunakan untuk mengatur hari dari objek tanggal (1-31).</p>
        <pre><code>
    const d = new Date();
    d.setDate(15); // Mengatur hari ke-15
        </code></pre>
    
        <p>Metode <code>setDate()</code> juga bisa digunakan untuk menambahkan hari ke sebuah tanggal:</p>
        <pre><code>
    const d = new Date();
    d.setDate(d.getDate() + 50); // Menambahkan 50 hari ke tanggal saat ini
        </code></pre>
    
        <h2>Metode <code>setHours()</code></h2>
        <p>Metode <code>setHours()</code> digunakan untuk mengatur jam dari objek tanggal (0-23).</p>
        <pre><code>
    const d = new Date();
    d.setHours(22); // Mengatur jam menjadi 22 (10 malam)
        </code></pre>
    
        <h2>Metode <code>setMinutes()</code></h2>
        <p>Metode <code>setMinutes()</code> digunakan untuk mengatur menit dari objek tanggal (0-59).</p>
        <pre><code>
    const d = new Date();
    d.setMinutes(30); // Mengatur menit menjadi 30
        </code></pre>
    
        <h2>Metode <code>setSeconds()</code></h2>
        <p>Metode <code>setSeconds()</code> digunakan untuk mengatur detik dari objek tanggal (0-59).</p>
        <pre><code>
    const d = new Date();
    d.setSeconds(30); // Mengatur detik menjadi 30
        </code></pre>
    
        <h2>Membandingkan Tanggal</h2>
        <p>Tanggal bisa dengan mudah dibandingkan menggunakan operator perbandingan.</p>
        <p>Berikut adalah contoh perbandingan antara tanggal hari ini dengan 14 Januari 2100:</p>
        <pre><code>
    let text = "";
    const today = new Date();
    const someday = new Date();
    someday.setFullYear(2100, 0, 14); // Mengatur tanggal 14 Januari 2100
    
    if (someday > today) {
      text = "Hari ini sebelum 14 Januari 2100.";
    } else {
      text = "Hari ini setelah 14 Januari 2100.";
    }
        </code></pre>
    
        <h3>Catatan:</h3>
        <ul>
            <li>JavaScript menghitung bulan mulai dari 0 hingga 11. Januari adalah bulan ke-0, dan Desember adalah bulan ke-11.</li>
        </ul>
    
        <br>
        <a href="#date-formats" class="btn-prev">&larr; Previous</a>
        <a href="#math" class="btn-next">Next &rarr;</a>        
    </section>
    
    <section id="math" class="content hidden">
        <h1>Objek Math JavaScript</h1>
        <p>Objek Math JavaScript memungkinkan Anda untuk melakukan tugas-tugas matematis pada angka.</p>
    
        <h2>Contoh</h2>
        <pre><code>
        Math.PI;
        </code></pre>
    
        <h2>Objek Math</h2>
        <p>Berbeda dengan objek lain, objek Math tidak memiliki konstruktor. Objek Math bersifat statis. Semua metode dan properti dapat digunakan tanpa membuat objek Math terlebih dahulu.</p>
    
        <h2>Properti Math (Konstanta)</h2>
        <p>Sintaks untuk setiap properti Math adalah: <code>Math.properti</code>.</p>
        <p>JavaScript menyediakan 8 konstanta matematis yang dapat diakses sebagai properti Math:</p>
    
        <ul>
            <li><code>Math.E</code>  // Mengembalikan angka Euler</li>
            <li><code>Math.PI</code> // Mengembalikan PI</li>
            <li><code>Math.SQRT2</code> // Mengembalikan akar kuadrat dari 2</li>
            <li><code>Math.SQRT1_2</code> // Mengembalikan akar kuadrat dari 1/2</li>
            <li><code>Math.LN2</code> // Mengembalikan logaritma natural dari 2</li>
            <li><code>Math.LN10</code> // Mengembalikan logaritma natural dari 10</li>
            <li><code>Math.LOG2E</code> // Mengembalikan logaritma basis 2 dari E</li>
            <li><code>Math.LOG10E</code> // Mengembalikan logaritma basis 10 dari E</li>
        </ul>
    
        <h2>Metode Math</h2>
        <p>Sintaks untuk metode Math adalah: <code>Math.metode(angka)</code></p>
    
        <h3>Mengubah Angka Menjadi Integer</h3>
        <p>Ada 4 metode umum untuk membulatkan angka ke integer:</p>
        <ul>
            <li><code>Math.round(x)</code>  // Mengembalikan x yang dibulatkan ke integer terdekat</li>
            <li><code>Math.ceil(x)</code>   // Mengembalikan x yang dibulatkan ke atas ke integer terdekat</li>
            <li><code>Math.floor(x)</code>  // Mengembalikan x yang dibulatkan ke bawah ke integer terdekat</li>
            <li><code>Math.trunc(x)</code>  // Mengembalikan bagian integer dari x (baru di ES6)</li>
        </ul>
    
        <h4>Math.round()</h4>
        <p><code>Math.round(x)</code> mengembalikan integer terdekat:</p>
        <pre><code>
        Math.round(4.6);  // Mengembalikan 5
        Math.round(4.5);  // Mengembalikan 5
        Math.round(4.4);  // Mengembalikan 4
        </code></pre>
    
        <h4>Math.ceil()</h4>
        <p><code>Math.ceil(x)</code> mengembalikan nilai x yang dibulatkan ke atas ke integer terdekat:</p>
        <pre><code>
        Math.ceil(4.9);  // Mengembalikan 5
        Math.ceil(4.7);  // Mengembalikan 5
        Math.ceil(4.4);  // Mengembalikan 5
        Math.ceil(4.2);  // Mengembalikan 5
        Math.ceil(-4.2); // Mengembalikan -4
        </code></pre>
    
        <h4>Math.floor()</h4>
        <p><code>Math.floor(x)</code> mengembalikan nilai x yang dibulatkan ke bawah ke integer terdekat:</p>
        <pre><code>
        Math.floor(4.9);  // Mengembalikan 4
        Math.floor(4.7);  // Mengembalikan 4
        Math.floor(4.4);  // Mengembalikan 4
        Math.floor(4.2);  // Mengembalikan 4
        Math.floor(-4.2); // Mengembalikan -5
        </code></pre>
    
        <h4>Math.trunc()</h4>
        <p><code>Math.trunc(x)</code> mengembalikan bagian integer dari x:</p>
        <pre><code>
        Math.trunc(4.9);  // Mengembalikan 4
        Math.trunc(4.7);  // Mengembalikan 4
        Math.trunc(4.4);  // Mengembalikan 4
        Math.trunc(4.2);  // Mengembalikan 4
        Math.trunc(-4.2); // Mengembalikan -4
        </code></pre>
    
        <h4>Math.sign()</h4>
        <p><code>Math.sign(x)</code> mengembalikan apakah x negatif, nol, atau positif:</p>
        <pre><code>
        Math.sign(-4); // Mengembalikan -1
        Math.sign(0);  // Mengembalikan 0
        Math.sign(4);  // Mengembalikan 1
        </code></pre>
    
        <h2>Math.pow()</h2>
        <p><code>Math.pow(x, y)</code> mengembalikan nilai x yang dipangkatkan ke y:</p>
        <pre><code>
        Math.pow(8, 2);  // Mengembalikan 64
        </code></pre>
    
        <h2>Math.sqrt()</h2>
        <p><code>Math.sqrt(x)</code> mengembalikan akar kuadrat dari x:</p>
        <pre><code>
        Math.sqrt(64);  // Mengembalikan 8
        </code></pre>
    
        <h2>Math.abs()</h2>
        <p><code>Math.abs(x)</code> mengembalikan nilai absolut (positif) dari x:</p>
        <pre><code>
        Math.abs(-4.7);  // Mengembalikan 4.7
        </code></pre>
    
        <h2>Math.sin()</h2>
        <p><code>Math.sin(x)</code> mengembalikan nilai sinus (antara -1 dan 1) dari sudut x (dalam radian). Jika Anda ingin menggunakan derajat, Anda harus mengonversi derajat ke radian:</p>
        <pre><code>
        Math.sin(90 * Math.PI / 180);  // Mengembalikan 1 (sinus 90 derajat)
        </code></pre>
    
        <h2>Math.cos()</h2>
        <p><code>Math.cos(x)</code> mengembalikan nilai kosinus (antara -1 dan 1) dari sudut x (dalam radian). Jika Anda ingin menggunakan derajat, Anda harus mengonversi derajat ke radian:</p>
        <pre><code>
        Math.cos(0 * Math.PI / 180);  // Mengembalikan 1 (kosinus 0 derajat)
        </code></pre>
    
        <h2>Math.min() dan Math.max()</h2>
        <p><code>Math.min()</code> dan <code>Math.max()</code> dapat digunakan untuk menemukan nilai terkecil atau terbesar dari sekumpulan argumen:</p>
        <pre><code>
        Math.min(0, 150, 30, 20, -8, -200);  // Mengembalikan -200
        Math.max(0, 150, 30, 20, -8, -200);  // Mengembalikan 150
        </code></pre>
    
        <h2>Math.random()</h2>
        <p><code>Math.random()</code> mengembalikan angka acak antara 0 (inklusif) dan 1 (eksklusif):</p>
        <pre><code>
        Math.random();  // Mengembalikan angka acak antara 0 dan 1
        </code></pre>
    
        <h2>Metode Math.log()</h2>
        <p><code>Math.log(x)</code> mengembalikan logaritma natural dari x:</p>
        <pre><code>
        Math.log(1);   // Mengembalikan 0
        Math.log(2);   // Mengembalikan 0.693
        Math.log(3);   // Mengembalikan 1.099
        </code></pre>
    
        <h2>Metode Math.log2()</h2>
        <p><code>Math.log2(x)</code> mengembalikan logaritma basis 2 dari x:</p>
        <pre><code>
        Math.log2(8);  // Mengembalikan 3
        </code></pre>
    
        <h2>Metode Math.log10()</h2>
        <p><code>Math.log10(x)</code> mengembalikan logaritma basis 10 dari x:</p>
        <pre><code>
        Math.log10(1000);  // Mengembalikan 3
        </code></pre>
    
        <h2>Daftar Metode Math JavaScript</h2>
        <table>
            <tr><td><code>abs(x)</code></td><td>Mengembalikan nilai absolut dari x</td></tr>
    <tr><td><code>acos(x)</code></td><td>Mengembalikan arccosine dari x, dalam radian</td></tr>
    <tr><td><code>acosh(x)</code></td><td>Mengembalikan arccosine hiperbik dari x</td></tr>
    <tr><td><code>asin(x)</code></td><td>Mengembalikan arcsine dari x, dalam radian</td></tr>
    <tr><td><code>asinh(x)</code></td><td>Mengembalikan arcsine hiperbik dari x</td></tr>
    <tr><td><code>atan(x)</code></td><td>Mengembalikan arctangent dari x, dalam radian</td></tr>
    <tr><td><code>atanh(x)</code></td><td>Mengembalikan arctangent hiperbik dari x</td></tr>
    <tr><td><code>cbrt(x)</code></td><td>Mengembalikan akar kubik dari x</td></tr>
    <tr><td><code>cos(x)</code></td><td>Mengembalikan cosinus dari x (dalam radian)</td></tr>
    <tr><td><code>exp(x)</code></td><td>Mengembalikan e pangkat x</td></tr>
    <tr><td><code>floor(x)</code></td><td>Mengembalikan x yang dibulatkan ke bawah ke integer terdekat</td></tr>
    <tr><td><code>log(x)</code></td><td>Mengembalikan logaritma natural dari x</td></tr>
    <tr><td><code>max()</code></td><td>Mengembalikan nilai terbesar dari sekumpulan angka</td></tr>
    <tr><td><code>min()</code></td><td>Mengembalikan nilai terkecil dari sekumpulan angka</td></tr>
    <tr><td><code>pow(x, y)</code></td><td>Mengembalikan x pangkat y</td></tr>
    <tr><td><code>random()</code></td><td>Mengembalikan angka acak antara 0 dan 1</td></tr>
    <tr><td><code>round(x)</code></td><td>Mengembalikan x yang dibulatkan ke integer terdekat</td></tr>
    <tr><td><code>sin(x)</code></td><td>Mengembalikan sinus dari x (dalam radian)</td></tr>
    <tr><td><code>sqrt(x)</code></td><td>Mengembalikan akar kuadrat dari x</td></tr>
    <tr><td><code>tan(x)</code></td><td>Mengembalikan tangen dari x (dalam radian)</td></tr>
    </table>
    <br>
    <a href="#date-set-methods" class="btn-prev">&larr; Previous</a>
    <a href="#random" class="btn-next">Next &rarr;</a>        
  </section>

  <section id="random" class="content hidden">
    <h1>Penjelasan Math.random() dalam JavaScript</h1>
    <p>Math.random() digunakan untuk menghasilkan angka acak dalam JavaScript. Fungsi ini mengembalikan angka acak antara 0 (inklusif) dan 1 (eksklusif), yang berarti nilai yang dikembalikan selalu lebih kecil dari 1.</p>
    
    <h2>Contoh Penggunaan Math.random()</h2>
    <p>Berikut adalah contoh penggunaan Math.random() untuk menghasilkan angka acak:</p>
    <pre><code>
// Mengembalikan angka acak:
Math.random();
    </code></pre>
    
    <h2>Angka Acak dalam JavaScript</h2>
    <p>Dengan menggunakan Math.random() bersama Math.floor(), kita dapat menghasilkan angka acak berupa bilangan bulat. Di JavaScript, tidak ada tipe data untuk bilangan bulat, yang ada hanyalah angka, baik dengan desimal maupun tanpa desimal.</p>
    
    <h3>Contoh:</h3>
    <ul>
        <li><code>Math.floor(Math.random() * 10);</code> - Menghasilkan angka acak dari 0 hingga 9.</li>
        <li><code>Math.floor(Math.random() * 11);</code> - Menghasilkan angka acak dari 0 hingga 10.</li>
        <li><code>Math.floor(Math.random() * 100);</code> - Menghasilkan angka acak dari 0 hingga 99.</li>
        <li><code>Math.floor(Math.random() * 101);</code> - Menghasilkan angka acak dari 0 hingga 100.</li>
        <li><code>Math.floor(Math.random() * 10) + 1;</code> - Menghasilkan angka acak dari 1 hingga 10.</li>
        <li><code>Math.floor(Math.random() * 100) + 1;</code> - Menghasilkan angka acak dari 1 hingga 100.</li>
    </ul>
    
    <h2>Fungsi Acak yang Tepat</h2>
    <p>Untuk keperluan penggunaan angka acak dengan batasan tertentu, kita bisa membuat fungsi JavaScript untuk menghasilkan angka acak sesuai dengan rentang yang diinginkan. Berikut adalah contoh fungsi acak yang selalu mengembalikan angka antara <code>min</code> (inklusif) dan <code>max</code> (eksklusif):</p>
    <pre><code>
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}
    </code></pre>
    
    <p>Jika Anda ingin angka acak termasuk <code>max</code>, Anda bisa menggunakan fungsi berikut:</p>
    <pre><code>
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
    </code></pre>
    
    <h2>Contoh Penggunaan Komentar</h2>
    <p>Komentar digunakan untuk menjelaskan kode agar lebih mudah dipahami atau untuk mencegah eksekusi kode sementara. Berikut adalah contoh penggunaan komentar:</p>
    
    <h3>Komentar Satu Baris</h3>
    <p>Komentar satu baris dimulai dengan <code>//</code>. Semua teks setelah <code>//</code> di akhir baris akan diabaikan oleh JavaScript.</p>
    <pre><code>
// Mengubah judul:
document.getElementById("myH").innerHTML = "Halaman Pertama Saya";

// Mengubah paragraf:
document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
    </code></pre>
    
    <h3>Komentar Beberapa Baris</h3>
    <p>Komentar beberapa baris dimulai dengan <code>/*</code> dan diakhiri dengan <code>*/</code>. Semua teks di antara keduanya akan diabaikan.</p>
    <pre><code>
/*
Kode di bawah ini akan mengubah
judul dengan id = "myH"
dan paragraf dengan id = "myP"
di halaman web saya:
*/
document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
    </code></pre>
    
    <h3>Penggunaan Komentar untuk Mencegah Eksekusi</h3>
    <p>Anda juga bisa menggunakan komentar untuk mencegah eksekusi kode, terutama saat menguji kode. Contoh:</p>
    <pre><code>
//document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
    </code></pre>
    
    <p>Atau menggunakan blok komentar untuk mencegah eksekusi beberapa baris:</p>
    <pre><code>
/*
document.getElementById("myH").innerHTML = "Halaman Pertama Saya";
document.getElementById("myP").innerHTML = "Paragraf pertama saya.";
*/
    </code></pre>

    <br>
    <a href="#math" class="btn-prev">&larr; Previous</a>
    <a href="#booleans" class="btn-next">Next &rarr;</a>
</section>

<section id="booleans" class="content hidden">
    <h1>Boolean JavaScript</h1>

    <p>Sebuah Boolean dalam JavaScript mewakili salah satu dari dua nilai: <strong>true</strong> atau <strong>false</strong>.</p>

    <h2>Nilai Boolean</h2>
    <p>Sering kali dalam pemrograman, Anda akan membutuhkan tipe data yang hanya dapat memiliki salah satu dari dua nilai, seperti:</p>
    <ul>
        <li>YES / NO</li>
        <li>ON / OFF</li>
        <li>TRUE / FALSE</li>
    </ul>
    <p>Untuk ini, JavaScript memiliki tipe data Boolean yang hanya dapat memiliki nilai <strong>true</strong> atau <strong>false</strong>.</p>

    <h2>Fungsi Boolean()</h2>
    <p>Anda dapat menggunakan fungsi <code>Boolean()</code> untuk mengetahui apakah suatu ekspresi (atau variabel) bernilai true atau false:</p>

    <p>Contoh:</p>
    <pre><code>Boolean(10 > 9)</code></pre>

    <p>Atau bahkan lebih mudah:</p>
    <pre><code>(10 > 9)</code></pre>

    <h2>Perbandingan dan Kondisi</h2>
    <p>Berikut adalah beberapa contoh operator perbandingan:</p>

    <table>
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
            <th>Contoh</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Sama dengan</td>
            <td><code>if (day == "Monday")</code></td>
        </tr>
        <tr>
            <td>></td>
            <td>Lebih besar</td>
            <td><code>if (salary > 9000)</code></td>
        </tr>
        <tr>
            <td><</td>
            <td>Lebih kecil</td>
            <td><code>if (age < 18)</code></td>
        </tr>
    </table>

    <p>Nilai Boolean dari suatu ekspresi adalah dasar dari semua perbandingan dan kondisi di JavaScript.</p>

    <h2>Segala Sesuatu dengan "Nilai" Adalah <strong>True</strong></h2>
    <p>Berikut adalah beberapa contoh yang dianggap <strong>true</strong>:</p>
    <ul>
        <li>100</li>
        <li>3.14</li>
        <li>-15</li>
        <li>"Hello"</li>
        <li>"false"</li>
        <li>7 + 1 + 3.14</li>
    </ul>

    <h2>Segala Sesuatu Tanpa "Nilai" Adalah <strong>False</strong></h2>
    <p>Berikut adalah beberapa contoh yang dianggap <strong>false</strong>:</p>

    <pre><code>let x = 0; Boolean(x);  // false</code></pre>

    <pre><code>let x = -0; Boolean(x);  // false</code></pre>

    <pre><code>let x = ""; Boolean(x);  // false</code></pre>

    <pre><code>let x; Boolean(x);  // false</code></pre>

    <pre><code>let x = null; Boolean(x);  // false</code></pre>

    <pre><code>let x = false; Boolean(x);  // false</code></pre>

    <pre><code>let x = 10 / "Hallo"; Boolean(x);  // false</code></pre>

    <h2>JavaScript Booleans sebagai Objek</h2>
    <p>Boolean dalam JavaScript adalah nilai primitif yang dibuat dari literal:</p>
    <pre><code>let x = false;</code></pre>

    <p>Namun, Boolean juga bisa didefinisikan sebagai objek dengan kata kunci <code>new</code>:</p>
    <pre><code>let y = new Boolean(false);</code></pre>

    <h2>Jangan Membuat Objek Boolean</h2>
    <p>Penggunaan <code>new</code> untuk membuat objek Boolean dapat memperlambat eksekusi dan membuat kode lebih rumit. Objek Boolean dapat menghasilkan hasil yang tidak terduga:</p>

    <p>Ketika menggunakan operator <code>==</code>, <code>x</code> dan <code>y</code> akan dianggap sama:</p>
    <pre><code>let x = false; let y = new Boolean(false);</code></pre>

    <p>Ketika menggunakan operator <code>===</code>, <code>x</code> dan <code>y</code> tidak akan dianggap sama:</p>
    <pre><code>let x = false; let y = new Boolean(false);</code></pre>

    <p>Perhatikan perbedaan antara <code>(x == y)</code> dan <code>(x === y)</code>.</p>

    <p>Contoh <code>(x == y)</code>:</p>
    <pre><code>let x = new Boolean(false); let y = new Boolean(false); (x == y);  // true</code></pre>

    <p>Contoh <code>(x === y)</code>:</p>
    <pre><code>let x = new Boolean(false); let y = new Boolean(false); (x === y);  // false</code></pre>

    <br>
    <a href="#random" class="btn-prev">&larr; Previous</a>
    <a href="#booleans" class="btn-next">Next &rarr;</a>        
</section>

<section id="comparisons" class="content">
    <h1>Operator Perbandingan dan Logika JavaScript</h1>

    <p>Operator perbandingan dan logika digunakan untuk menguji nilai benar atau salah.</p>

    <h2>Operator Perbandingan</h2>
    <p>Operator perbandingan digunakan dalam pernyataan logika untuk menentukan kesamaan atau perbedaan antara variabel atau nilai.</p>

    <p>Misalnya, jika <strong>x = 5</strong>, tabel di bawah ini menjelaskan operator perbandingan:</p>

    <table>
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
            <th>Membandingkan</th>
            <th>Menghasilkan</th>
        </tr>
        <tr>
            <td>==</td>
            <td>Sama dengan</td>
            <td>x == 8</td>
            <td>false</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>x == 5</td>
            <td>true</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>x == "5"</td>
            <td>true</td>
        </tr>
        <tr>
            <td>===</td>
            <td>Nilai dan tipe yang sama</td>
            <td>x === 5</td>
            <td>true</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>x === "5"</td>
            <td>false</td>
        </tr>
        <tr>
            <td>!=</td>
            <td>Tidak sama dengan</td>
            <td>x != 8</td>
            <td>true</td>
        </tr>
        <tr>
            <td>!==</td>
            <td>Tidak sama nilai atau tidak sama tipe</td>
            <td>x !== 5</td>
            <td>false</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>x !== "5"</td>
            <td>true</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>x !== 8</td>
            <td>true</td>
        </tr>
        <tr>
            <td>></td>
            <td>Lebih besar dari</td>
            <td>x > 8</td>
            <td>false</td>
        </tr>
        <tr>
            <td><</td>
            <td>Lebih kecil dari</td>
            <td>x < 8</td>
            <td>true</td>
        </tr>
        <tr>
            <td>>=</td>
            <td>Lebih besar atau sama dengan</td>
            <td>x >= 8</td>
            <td>false</td>
        </tr>
        <tr>
            <td><=</td>
            <td>Lebih kecil atau sama dengan</td>
            <td>x <= 8</td>
            <td>true</td>
        </tr>
    </table>

    <h2>Bagaimana Cara Menggunakannya</h2>
    <p>Operator perbandingan dapat digunakan dalam pernyataan kondisional untuk membandingkan nilai dan mengambil tindakan tergantung pada hasilnya:</p>
    <pre><code>
    if (age < 18) text = "Terlalu muda untuk membeli alkohol";
    </code></pre>

    <h2>Operator Logika</h2>
    <p>Operator logika digunakan untuk menentukan logika antara variabel atau nilai.</p>

    <p>Misalnya, jika <strong>x = 6</strong> dan <strong>y = 3</strong>, tabel di bawah ini menjelaskan operator logika:</p>

    <table>
        <tr>
            <th>Operator</th>
            <th>Deskripsi</th>
            <th>Contoh</th>
        </tr>
        <tr>
            <td>&&</td>
            <td>dan</td>
            <td>(x < 10 && y > 1) adalah benar</td>
        </tr>
        <tr>
            <td>||</td>
            <td>atau</td>
            <td>(x == 5 || y == 5) adalah salah</td>
        </tr>
        <tr>
            <td>!</td>
            <td>tidak</td>
            <td>!(x == y) adalah benar</td>
        </tr>
    </table>

    <h2>Operator Kondisional (Ternary)</h2>
    <p>JavaScript juga memiliki operator kondisional yang memberikan nilai ke variabel berdasarkan kondisi tertentu.</p>

    <p>Contoh:</p>
    <pre><code>
    let voteable = (age < 18) ? "Terlalu muda" : "Cukup umur";
    </code></pre>

    <h2>Membandingkan Tipe yang Berbeda</h2>
    <p>Membandingkan data dengan tipe yang berbeda dapat menghasilkan hasil yang tidak terduga.</p>

    <p>Untuk mendapatkan hasil yang benar, variabel harus dikonversi ke tipe yang sesuai sebelum perbandingan:</p>
    <pre><code>
    age = Number(age);
    if (isNaN(age)) {
      voteable = "Input bukan angka";
    } else {
      voteable = (age < 18) ? "Terlalu muda" : "Cukup umur";
    }
    </code></pre>

    <h2>Operator Nullish Coalescing (??)</h2>
    <p>Operator <code>??</code> mengembalikan argumen pertama jika itu bukan nilai null atau undefined. Jika tidak, ia akan mengembalikan argumen kedua.</p>

    <pre><code>
    let name = null;
    let text = "missing";
    let result = name ?? text;
    </code></pre>

    <h2>Operator Optional Chaining (?.)</h2>
    <p>Operator <code>?.</code> mengembalikan undefined jika objek tersebut undefined atau null (alih-alih melemparkan error).</p>

    <pre><code>
    const car = {type: "Fiat", model: "500", color: "white"};
    document.getElementById("demo").innerHTML = car?.name;
    </code></pre>

    <br>
    <a href="#booleans" class="btn-prev">&larr; Previous</a>
    <a href="#if-else" class="btn-next">Next &rarr;</a>        
</section>

<section id="if-else" class="content hidden">
    <h1>Pernyataan Kondisional JavaScript</h1>

    <p>Pernyataan kondisional sering digunakan ketika Anda ingin melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda. Anda dapat menggunakan pernyataan kondisional dalam kode Anda untuk mencapai hal ini.</p> 
    <p>Di JavaScript, kita memiliki beberapa pernyataan kondisional yang sering digunakan:</p>
    <ul>
        <li><strong>Gunakan <code>if</code></strong> untuk menentukan blok kode yang akan dijalankan jika kondisi tertentu terpenuhi (true).</li>
        <li><strong>Gunakan <code>else</code></strong> untuk menentukan blok kode yang akan dijalankan jika kondisi tersebut tidak terpenuhi (false).</li>
        <li><strong>Gunakan <code>else if</code></strong> untuk menentukan kondisi baru yang akan diuji jika kondisi pertama salah.</li>
        <li><strong>Gunakan <code>switch</code></strong> untuk menentukan banyak blok kode alternatif yang akan dijalankan.</li>
    </ul>

    <h2>Pernyataan <code>if</code></h2>
    <p>Gunakan pernyataan <code>if</code> untuk menentukan blok kode yang akan dijalankan jika kondisi tertentu terpenuhi (true).</p>

    <p><strong>Sintaksis:</strong></p>
    <pre><code>
if (kondisi) {
  //  blok kode yang akan dijalankan jika kondisi benar
}
    </code></pre>

    <p>Catatan: <code>if</code> harus ditulis dengan huruf kecil. Huruf besar seperti <code>If</code> atau <code>IF</code> akan menghasilkan kesalahan JavaScript.</p>

    <p><strong>Contoh:</strong> Jika jam kurang dari 18, buat sapaan "Selamat siang".</p>
    <pre><code>
if (jam < 18) {
  sapaan = "Selamat siang";
}
    </code></pre>

    <p>Hasil dari <code>sapaan</code> akan menjadi:</p>
    <pre><code>
"Selamat siang"
    </code></pre>

    <h2>Pernyataan <code>else</code></h2>
    <p>Gunakan pernyataan <code>else</code> untuk menentukan blok kode yang akan dijalankan jika kondisi tersebut tidak terpenuhi (false).</p>

    <p><strong>Sintaksis:</strong></p>
    <pre><code>
if (kondisi) {
  //  blok kode yang akan dijalankan jika kondisi benar
} else {
  //  blok kode yang akan dijalankan jika kondisi salah
}
    </code></pre>

    <p><strong>Contoh:</strong> Jika jam kurang dari 18, buat sapaan "Selamat siang", jika tidak, buat sapaan "Selamat malam".</p>
    <pre><code>
if (jam < 18) {
  sapaan = "Selamat siang";
} else {
  sapaan = "Selamat malam";
}
    </code></pre>

    <p>Hasil dari <code>sapaan</code> akan menjadi:</p>
    <pre><code>
"Selamat siang"
    </code></pre>

    <h2>Pernyataan <code>else if</code></h2>
    <p>Gunakan pernyataan <code>else if</code> untuk menentukan kondisi baru yang akan diuji jika kondisi pertama salah.</p>

    <p><strong>Sintaksis:</strong></p>
    <pre><code>
if (kondisi1) {
  //  blok kode yang akan dijalankan jika kondisi1 benar
} else if (kondisi2) {
  //  blok kode yang akan dijalankan jika kondisi1 salah dan kondisi2 benar
} else {
  //  blok kode yang akan dijalankan jika kondisi1 dan kondisi2 salah
}
    </code></pre>

    <p><strong>Contoh:</strong> Jika waktu kurang dari 10:00, buat sapaan "Selamat pagi", jika tidak, tetapi waktu kurang dari 20:00, buat sapaan "Selamat siang", jika tidak, buat sapaan "Selamat malam".</p>
    <pre><code>
if (waktu < 10) {
  sapaan = "Selamat pagi";
} else if (waktu < 20) {
  sapaan = "Selamat siang";
} else {
  sapaan = "Selamat malam";
}
    </code></pre>

    <p>Hasil dari <code>sapaan</code> akan menjadi:</p>
    <pre><code>
"Selamat pagi"
    </code></pre>

    <br>
    <a href="#comparisons" class="btn-prev">&larr; Sebelumnya</a>
    <a href="#switch" class="btn-next">Selanjutnya &rarr;</a>        
</section>

<section id="switch" class="content hidden">
    <h1>Pernyataan Switch JavaScript</h1>

    <p>Pernyataan <code>switch</code> digunakan untuk melakukan tindakan yang berbeda berdasarkan kondisi yang berbeda.</p>
    
    <h2>Pernyataan Switch JavaScript</h2>
    <p>Gunakan pernyataan <code>switch</code> untuk memilih salah satu dari banyak blok kode yang akan dieksekusi.</p>

    <h3>Sintaksis:</h3>
    <pre><code>
switch (ekspresi) {
  case x:
    // blok kode
    break;
  case y:
    // blok kode
    break;
  default:
    // blok kode
}
    </code></pre>

    <p>Ini cara kerjanya:</p>
    <ul>
        <li>Ekspresi dalam <code>switch</code> dievaluasi sekali.</li>
        <li>Nilai dari ekspresi dibandingkan dengan nilai-nilai yang ada pada setiap <code>case</code>.</li>
        <li>Jika ada yang cocok, blok kode yang terkait dengan <code>case</code> tersebut akan dieksekusi.</li>
        <li>Jika tidak ada yang cocok, blok kode <code>default</code> akan dieksekusi.</li>
    </ul>

    <h2>Contoh:</h2>
    <p>Metode <code>getDay()</code> mengembalikan angka hari dalam seminggu (antara 0 dan 6), di mana (Minggu = 0, Senin = 1, Selasa = 2, dst.).</p>
    <p>Contoh berikut menggunakan angka hari untuk menghitung nama hari:</p>
    <pre><code>
switch (new Date().getDay()) {
  case 0:
    day = "Minggu";
    break;
  case 1:
    day = "Senin";
    break;
  case 2:
    day = "Selasa";
    break;
  case 3:
    day = "Rabu";
    break;
  case 4:
    day = "Kamis";
    break;
  case 5:
    day = "Jumat";
    break;
  case 6:
    day = "Sabtu";
}
    </code></pre>
    <p>Hasil dari <code>day</code> akan menjadi: <strong>Sabtu</strong></p>

    <h2>Kata Kunci <code>break</code></h2>
    <p>Ketika JavaScript mencapai kata kunci <code>break</code>, maka eksekusi akan keluar dari blok <code>switch</code>.</p>
    <p>Ini akan menghentikan eksekusi di dalam blok <code>switch</code>.</p>
    <p>Anda tidak perlu menggunakan <code>break</code> pada <code>case</code> terakhir dalam blok <code>switch</code>, karena blok akan berhenti (berakhir) di situ juga.</p>
    <p><strong>Catatan:</strong> Jika Anda melewatkan pernyataan <code>break</code>, maka <code>case</code> berikutnya akan dijalankan meskipun evaluasi tidak cocok dengan <code>case</code> tersebut.</p>

    <h2>Kata Kunci <code>default</code></h2>
    <p>Kata kunci <code>default</code> menentukan kode yang akan dijalankan jika tidak ada kasus yang cocok.</p>

    <h3>Contoh:</h3>
    <pre><code>
switch (new Date().getDay()) {
  case 6:
    text = "Hari ini Sabtu";
    break;
  case 0:
    text = "Hari ini Minggu";
    break;
  default:
    text = "Menunggu Akhir Pekan";
}
    </code></pre>
    <p>Hasil dari <code>text</code> akan menjadi: <strong>Hari ini Sabtu</strong></p>

    <h2><code>default</code> Tidak Harus Menjadi Case Terakhir</h2>
    <p>Kata kunci <code>default</code> tidak harus selalu menjadi yang terakhir dalam blok <code>switch</code>.</p>
    <p><strong>Contoh:</strong></p>
    <pre><code>
switch (new Date().getDay()) {
  default:
    text = "Menunggu Akhir Pekan";
    break;
  case 6:
    text = "Hari ini Sabtu";
    break;
  case 0:
    text = "Hari ini Minggu";
}
    </code></pre>
    <p>Jika <code>default</code> bukan yang terakhir dalam blok <code>switch</code>, ingatlah untuk mengakhiri <code>case</code> dengan <code>break</code>.</p>

    <h2>Blok Kode yang Sama pada Beberapa Case</h2>
    <p>Kadang-kadang Anda ingin beberapa kasus <code>switch</code> menggunakan blok kode yang sama.</p>
    <p>Contoh berikut menunjukkan bahwa <code>case 4</code> dan <code>5</code> berbagi blok kode yang sama, dan <code>case 0</code> dan <code>6</code> berbagi blok kode lainnya:</p>
    <pre><code>
switch (new Date().getDay()) {
  case 4:
  case 5:
    text = "Akhir pekan segera tiba";
    break;
  case 0:
  case 6:
    text = "Ini adalah Akhir Pekan";
    break;
  default:
    text = "Menunggu Akhir Pekan";
}
    </code></pre>

    <h2>Detail Pembandingan</h2>
    <p>Jika beberapa kasus cocok dengan nilai <code>case</code>, maka yang pertama akan dipilih.</p>
    <p>Jika tidak ada <code>case</code> yang cocok, program akan melanjutkan ke label <code>default</code>.</p>
    <p>Jika tidak ada label <code>default</code>, program akan melanjutkan ke pernyataan setelah <code>switch</code>.</p>

    <h2>Perbandingan Ketat</h2>
    <p>Kasus <code>switch</code> menggunakan perbandingan ketat (<code>===</code>).</p>
    <p>Nilai-nilai yang dibandingkan harus memiliki tipe yang sama untuk bisa cocok.</p>

    <h3>Contoh:</h3>
    <pre><code>
let x = "0";
switch (x) {
  case 0:
    text = "Matikan";
    break;
  case 1:
    text = "Nyalakan";
    break;
  default:
    text = "Tidak ada nilai yang ditemukan";
}
    </code></pre>
    <p>Hasil dari <code>text</code> akan menjadi: <strong>Tidak ada nilai yang ditemukan</strong></p>

    <br>
    <a href="#if-else" class="btn-prev">&larr; Previous</a>
    <a href="#loop-for" class="btn-next">Next &rarr;</a>        
</section>

<section id="loop-for" class="content hidden">
    <h1>Perulangan For dalam JavaScript</h1>

    <p>Perulangan (*loop*) dapat mengeksekusi blok kode beberapa kali.</p>

    <h2>Perulangan JavaScript</h2>
    <p>Perulangan sangat berguna jika Anda ingin menjalankan kode yang sama berulang kali, setiap kali dengan nilai yang berbeda.</p>
    <p>Seringkali ini terjadi saat bekerja dengan array. Sebagai contoh, daripada menulis kode berikut:</p>
    <pre><code>
    text += cars[0] + "&lt;br&gt;";
    text += cars[1] + "&lt;br&gt;";
    text += cars[2] + "&lt;br&gt;";
    text += cars[3] + "&lt;br&gt;";
    text += cars[4] + "&lt;br&gt;";
    text += cars[5] + "&lt;br&gt;";
    </code></pre>

    <p>Anda bisa menulis:</p>
    <pre><code>
    for (let i = 0; i &lt; cars.length; i++) {
        text += cars[i] + "&lt;br&gt;";
    }
    </code></pre>

    <h2>Jenis-Jenis Perulangan</h2>
    <p>JavaScript mendukung berbagai jenis perulangan:</p>
    <ul>
        <li><strong>for</strong> - perulangan melalui blok kode sejumlah kali</li>
        <li><strong>for/in</strong> - perulangan melalui properti sebuah objek</li>
        <li><strong>for/of</strong> - perulangan melalui nilai-nilai dari objek iterable</li>
        <li><strong>while</strong> - perulangan melalui blok kode selama kondisi yang ditentukan bernilai true</li>
        <li><strong>do/while</strong> - juga perulangan melalui blok kode selama kondisi yang ditentukan bernilai true</li>
    </ul>

    <h2>Perulangan For</h2>
    <p>Pernyataan <code>for</code> membuat sebuah perulangan dengan 3 ekspresi yang bersifat opsional:</p>
    <pre><code>
    for (ekspresi 1; ekspresi 2; ekspresi 3) {
        // blok kode yang akan dieksekusi
    }
    </code></pre>

    <ul>
        <li><strong>Ekspresi 1</strong> dieksekusi (hanya satu kali) sebelum eksekusi blok kode.</li>
        <li><strong>Ekspresi 2</strong> mendefinisikan kondisi untuk menjalankan blok kode.</li>
        <li><strong>Ekspresi 3</strong> dieksekusi (setiap kali) setelah blok kode dijalankan.</li>
    </ul>

    <h3>Contoh</h3>
    <pre><code>
    for (let i = 0; i &lt; 5; i++) {
        text += "Nomor: " + i + "&lt;br&gt;";
    }
    </code></pre>

    <p>Dari contoh di atas, Anda bisa membaca penjelasan berikut:</p>
    <ul>
        <li><strong>Ekspresi 1</strong> menetapkan variabel sebelum perulangan dimulai (<code>let i = 0</code>).</li>
        <li><strong>Ekspresi 2</strong> mendefinisikan kondisi untuk menjalankan perulangan (<code>i</code> harus kurang dari 5).</li>
        <li><strong>Ekspresi 3</strong> menambah nilai (<code>i++</code>) setiap kali blok kode dalam perulangan telah dijalankan.</li>
    </ul>

    <h2>Ekspresi 1</h2>
    <p>Biasanya, ekspresi 1 digunakan untuk menginisialisasi variabel yang digunakan dalam perulangan (<code>let i = 0</code>).</p>
    <p>Namun, ini tidak selalu terjadi. JavaScript tidak mempersoalkan hal tersebut. Ekspresi 1 bersifat opsional.</p>

    <h3>Contoh</h3>
    <pre><code>
    for (let i = 0, len = cars.length, text = ""; i &lt; len; i++) {
        text += cars[i] + "&lt;br&gt;";
    }
    </code></pre>

    <p>Dan Anda bisa menghilangkan ekspresi 1 (seperti saat nilai-nilai sudah ditetapkan sebelum perulangan dimulai):</p>
    <pre><code>
    let i = 2;
    let len = cars.length;
    let text = "";
    for (; i &lt; len; i++) {
        text += cars[i] + "&lt;br&gt;";
    }
    </code></pre>

    <h2>Ekspresi 2</h2>
    <p>Seringkali, ekspresi 2 digunakan untuk mengevaluasi kondisi dari variabel awal.</p>
    <p>Namun, ini juga tidak selalu terjadi. JavaScript tidak mempersoalkan hal tersebut. Ekspresi 2 juga bersifat opsional.</p>

    <h2>Ekspresi 3</h2>
    <p>Seringkali, ekspresi 3 akan menambah nilai dari variabel awal.</p>
    <p>Namun, ini tidak selalu terjadi. JavaScript tidak mempersoalkan hal tersebut. Ekspresi 3 juga bersifat opsional.</p>

    <h3>Contoh</h3>
    <pre><code>
    let i = 0;
    let len = cars.length;
    let text = "";
    for (; i &lt; len; ) {
        text += cars[i] + "&lt;br&gt;";
        i++;
    }
    </code></pre>

    <h2>Lingkup Variabel dalam Perulangan</h2>
    <h3>Menggunakan <code>var</code> dalam perulangan:</h3>
    <pre><code>
    var i = 5;

    for (var i = 0; i &lt; 10; i++) {
        // beberapa kode
    }

    // Di sini, i adalah 10
    </code></pre>

    <h3>Menggunakan <code>let</code> dalam perulangan:</h3>
    <pre><code>
    let i = 5;

    for (let i = 0; i &lt; 10; i++) {
        // beberapa kode
    }

    // Di sini, i adalah 5
    </code></pre>

    <p>Pada contoh pertama, menggunakan <code>var</code>, variabel yang dideklarasikan di dalam perulangan akan mendeklarasikan ulang variabel di luar perulangan.</p>
    <p>Pada contoh kedua, menggunakan <code>let</code>, variabel yang dideklarasikan dalam perulangan tidak mendeklarasikan ulang variabel di luar perulangan.</p>
    <p>Ketika <code>let</code> digunakan untuk mendeklarasikan variabel <code>i</code> dalam perulangan, variabel <code>i</code> hanya akan terlihat dalam perulangan tersebut.</p>

    <h2>For/Of dan For/In Loops</h2>
    <p>Perulangan <code>for/in</code> dan <code>for/of</code> dijelaskan pada bab berikutnya.</p>

    <h2>While Loops</h2>
    <p>Perulangan <code>while</code> dan <code>do/while</code> dijelaskan pada bab berikutnya.</p>

    <br>
    <a href="#switch" class="btn-prev">&larr; Previous</a>
    <a href="#loop-for-in" class="btn-next">Next &rarr;</a>        
</section>

<section id="loop-for-in" class="content hidden">
    <h1>For In Loop JavaScript</h1>

    <p>Pernyataan **for in** dalam JavaScript digunakan untuk melakukan perulangan melalui properti-properti dari sebuah objek.</p>

    <h2>Sintaksis</h2>
    <pre><code>
for (key in object) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h2>Contoh</h2>
    <pre><code>
const person = {fname: "John", lname: "Doe", age: 25};

let text = "";
for (let x in person) {
  text += person[x];
}
    </code></pre>

    <h2>Penjelasan Contoh</h2>
    <ul>
        <li>Perulangan **for in** akan mengiterasi (melewati) objek `person`.</li>
        <li>Setiap iterasi akan mengembalikan sebuah **key** (kunci) dari objek `person` (dalam contoh ini, `x`).</li>
        <li>**Key** tersebut digunakan untuk mengakses nilai dari key tersebut.</li>
        <li>Nilai dari key dapat diakses melalui `person[x]`.</li>
    </ul>

    <h2>For In pada Array</h2>
    <p>Pernyataan **for in** juga dapat digunakan untuk melakukan perulangan melalui properti-properti dari sebuah array.</p>

    <h2>Sintaksis</h2>
    <pre><code>
for (variable in array) {
  // kode yang akan dieksekusi
}
    </code></pre>

    <h2>Contoh</h2>
    <pre><code>
const numbers = [45, 4, 9, 16, 25];

let txt = "";
for (let x in numbers) {
  txt += numbers[x];
}
    </code></pre>

    <h2>Catatan</h2>
    <p>Namun, **jangan gunakan for in pada Array** jika urutan indeks sangat penting.</p>
    <p>Urutan indeks pada array bersifat **tergantung pada implementasi**, dan nilai array mungkin tidak diakses sesuai urutan yang Anda harapkan.</p>
    <p>Lebih baik menggunakan perulangan **for**, **for of**, atau metode **Array.forEach()** saat urutan sangat penting.</p>

    <h2>Array.forEach()</h2>
    <p>Metode **forEach()** akan memanggil sebuah fungsi (fungsi callback) sekali untuk setiap elemen array.</p>

    <h2>Contoh</h2>
    <pre><code>
const numbers = [45, 4, 9, 16, 25];

let txt = "";
numbers.forEach(myFunction);

function myFunction(value, index, array) {
  txt += value;
}
    </code></pre>

    <h2>Penjelasan</h2>
    <p>Perhatikan bahwa fungsi callback menerima 3 parameter:</p>
    <ul>
        <li>Nilai elemen</li>
        <li>Indeks elemen</li>
        <li>Array itu sendiri</li>
    </ul>

    <p>Contoh di atas hanya menggunakan parameter **value**. Fungsi tersebut dapat ditulis ulang menjadi:</p>

    <h2>Contoh</h2>
    <pre><code>
const numbers = [45, 4, 9, 16, 25];

let txt = "";
numbers.forEach(myFunction);

function myFunction(value) {
  txt += value;
}
    </code></pre>

    <br>
    <a href="#loop-for" class="btn-prev">&larr; Previous</a>
    <a href="#loop-for-of" class="btn-next">Next &rarr;</a>        
</section>

<section id="loop-for-of" class="content hidden">
    <h1>Perulangan JavaScript For Of</h1>

    <p>Pernyataan <strong>for of</strong> dalam JavaScript digunakan untuk melakukan perulangan melalui nilai-nilai dari sebuah objek yang dapat diiterasi.</p>
    <p>Dengan <strong>for of</strong>, Anda dapat melakukan perulangan pada struktur data yang dapat diiterasi seperti <strong>Array</strong>, <strong>String</strong>, <strong>Map</strong>, <strong>NodeList</strong>, dan lainnya.</p>

    <h2>Sintaksis</h2>
    <pre><code>
for (variable of iterable) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <ul>
        <li><strong>variable</strong> - Untuk setiap iterasi, nilai dari properti berikutnya akan disalin ke variabel. Variabel ini dapat dideklarasikan dengan <code>const</code>, <code>let</code>, atau <code>var</code>.</li>
        <li><strong>iterable</strong> - Sebuah objek yang memiliki properti yang dapat diiterasi.</li>
    </ul>

    <h2>Dukungan Browser</h2>
    <p>Fitur <strong>for/of</strong> ditambahkan ke JavaScript pada tahun 2015 (ES6).</p>
    <p>Berikut adalah browser yang mendukung <strong>for/of</strong>:</p>
    <ul>
        <li>Chrome 38</li>
        <li>Edge 12</li>
        <li>Firefox 51</li>
        <li>Safari 7</li>
        <li>Opera 25</li>
    </ul>
    <p><strong>for/of</strong> tidak didukung oleh Internet Explorer.</p>

    <h2>Perulangan pada Array</h2>
    <p>Berikut adalah contoh perulangan menggunakan <strong>for of</strong> pada Array:</p>
    <pre><code>
const cars = ["BMW", "Volvo", "Mini"];

let text = "";
for (let x of cars) {
  text += x;
}
    </code></pre>

    <h2>Perulangan pada String</h2>
    <p>Berikut adalah contoh perulangan menggunakan <strong>for of</strong> pada String:</p>
    <pre><code>
let language = "JavaScript";

let text = "";
for (let x of language) {
  text += x;
}
    </code></pre>

    <br>
    <a href="#loop-for-in" class="btn-prev">&larr; Previous</a>
    <a href="#loop-while" class="btn-next">Next &rarr;</a>
</section>

<section id="loop-while" class="content hidden">
    <h1>Perulangan JavaScript: While Loop</h1>

    <p>Perulangan (Loop) dapat mengeksekusi sebuah blok kode selama kondisi yang ditentukan bernilai benar.</p> 

    <h2>Perulangan While</h2>
    <p>Perulangan **while** akan terus menjalankan blok kode selama kondisi yang ditentukan bernilai benar.</p>

    <h3>Sintaksis</h3>
    <pre><code>
while (kondisi) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h3>Contoh</h3>
    <p>Pada contoh berikut, kode dalam perulangan akan berjalan berulang kali selama variabel <code>i</code> kurang dari 10:</p>
    <pre><code>
while (i < 10) {
  text += "Angka adalah " + i;
  i++;
}
    </code></pre>

    <p>Jika Anda lupa untuk meningkatkan nilai variabel yang digunakan dalam kondisi, perulangan ini tidak akan pernah berhenti. Ini dapat menyebabkan browser Anda menjadi crash.</p>

    <h2>Perulangan Do While</h2>
    <p>Perulangan **do while** adalah varian dari perulangan **while**. Perulangan ini akan mengeksekusi blok kode sekali terlebih dahulu, sebelum memeriksa apakah kondisi bernilai benar, dan kemudian perulangan akan diulang selama kondisi tersebut bernilai benar.</p>

    <h3>Sintaksis</h3>
    <pre><code>
do {
  // blok kode yang akan dieksekusi
}
while (kondisi);
    </code></pre>

    <h3>Contoh</h3>
    <p>Contoh berikut menggunakan perulangan **do while**. Perulangan ini akan selalu dijalankan setidaknya sekali, bahkan jika kondisi tersebut salah, karena blok kode dieksekusi terlebih dahulu sebelum kondisi diuji:</p>
    <pre><code>
do {
  text += "Angka adalah " + i;
  i++;
}
while (i < 10);
    </code></pre>

    <p>Ingat untuk selalu meningkatkan nilai variabel yang digunakan dalam kondisi, jika tidak, perulangan ini tidak akan pernah berhenti!</p>

    <h2>Perbandingan For dan While</h2>
    <p>Jika Anda telah membaca bab sebelumnya tentang perulangan **for**, Anda akan menemukan bahwa perulangan **while** hampir sama dengan perulangan **for**, dengan pernyataan 1 dan pernyataan 3 yang dihilangkan.</p>

    <h3>Contoh menggunakan For Loop</h3>
    <p>Perulangan ini menggunakan **for loop** untuk mengumpulkan nama mobil dari array <code>cars</code>:</p>
    <pre><code>
const cars = ["BMW", "Volvo", "Saab", "Ford"];
let i = 0;
let text = "";

for (;cars[i];) {
  text += cars[i];
  i++;
}
    </code></pre>

    <h3>Contoh menggunakan While Loop</h3>
    <p>Perulangan ini menggunakan **while loop** untuk mengumpulkan nama mobil dari array <code>cars</code>:</p>
    <pre><code>
const cars = ["BMW", "Volvo", "Saab", "Ford"];
let i = 0;
let text = "";

while (cars[i]) {
  text += cars[i];
  i++;
}
    </code></pre>

    <br>
    <a href="#loop-for-of" class="btn-prev">&larr; Previous</a>
    <a href="#break" class="btn-next">Next &rarr;</a>        
</section>

<section id="break" class="content hidden">
    <h1>Break dan Continue JavaScript</h1>

    <p>Pernyataan <strong>break</strong> digunakan untuk "melompat keluar" dari sebuah perulangan.</p>
    <p>Pernyataan <strong>continue</strong> digunakan untuk "melompati" satu iterasi dalam perulangan dan melanjutkan ke iterasi berikutnya.</p>

    <h2>Pernyataan Break</h2>
    <p>Pernyataan <strong>break</strong> telah Anda lihat sebelumnya digunakan dalam pernyataan <code>switch()</code> untuk keluar dari blok tersebut. Anda juga dapat menggunakan <strong>break</strong> untuk melompat keluar dari sebuah perulangan:</p>

    <h3>Contoh:</h3>
    <pre><code>
for (let i = 0; i < 10; i++) {
  if (i === 3) { break; }
  text += "Angka adalah " + i + "<br>";
}
    </code></pre>
    <p>Pada contoh di atas, pernyataan <strong>break</strong> akan mengakhiri perulangan (atau "memutuskan" perulangan) ketika penghitung perulangan (i) mencapai nilai 3.</p>

    <h2>Pernyataan Continue</h2>
    <p>Pernyataan <strong>continue</strong> menghentikan satu iterasi dalam perulangan jika kondisi tertentu terpenuhi, dan kemudian melanjutkan ke iterasi berikutnya:</p>

    <h3>Contoh:</h3>
    <pre><code>
for (let i = 0; i < 10; i++) {
  if (i === 3) { continue; }
  text += "Angka adalah " + i + "<br>";
}
    </code></pre>
    <p>Contoh di atas akan melewati nilai 3 dan melanjutkan dengan iterasi berikutnya pada perulangan.</p>

    <h2>Label dalam JavaScript</h2>
    <p>Untuk memberi label pada sebuah pernyataan dalam JavaScript, Anda menambahkan nama label di depan pernyataan diikuti dengan tanda titik dua:</p>
    <pre><code>
label:
statements
    </code></pre>
    <p>Pernyataan <strong>break</strong> dan <strong>continue</strong> adalah satu-satunya pernyataan dalam JavaScript yang dapat "melompat keluar" dari blok kode.</p>

    <h3>Sintaksis dengan Label:</h3>
    <pre><code>
break labelname;
continue labelname;
    </code></pre>
    <p>Pernyataan <strong>continue</strong> (dengan atau tanpa referensi label) hanya dapat digunakan untuk melewati satu iterasi perulangan.</p>
    <p>Pernyataan <strong>break</strong>, tanpa referensi label, hanya dapat digunakan untuk melompat keluar dari perulangan atau pernyataan <code>switch</code>.</p>
    <p>Namun, dengan referensi label, pernyataan <strong>break</strong> dapat digunakan untuk melompat keluar dari blok kode manapun:</p>

    <h3>Contoh:</h3>
    <pre><code>
const cars = ["BMW", "Volvo", "Saab", "Ford"];
list: {
  text += cars[0] + "<br>";
  text += cars[1] + "<br>";
  break list;
  text += cars[2] + "<br>";
  text += cars[3] + "<br>";
}
    </code></pre>

    <br>
    <a href="#loop-while" class="btn-prev">&larr; Sebelumnya</a>
    <a href="#iterables" class="btn-next">Selanjutnya &rarr;</a>
</section>

<section id="iterables" class="content hidden">
    <h1>Iterables dan Iterators dalam JavaScript</h1>

    <p>**Iterables** adalah objek yang dapat diiterasi (seperti Array). Iterables dapat diakses dengan kode yang sederhana dan efisien. Iterables dapat diiterasi menggunakan perulangan <code>for..of</code>.</p>

    <h2>Perulangan For Of</h2>
    <p>Pernyataan <code>for..of</code> JavaScript digunakan untuk melakukan iterasi (perulangan) melalui elemen-elemen objek iterable.</p>
    
    <p><strong>Sintaksis:</strong></p>
    <pre><code>
for (variabel of iterable) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h2>Iterasi</h2>
    <p>Iterasi berarti melakukan perulangan melalui urutan elemen. Berikut adalah beberapa contoh sederhana:</p>

    <h3>Iterasi atas String</h3>
    <p>Anda dapat menggunakan perulangan <code>for..of</code> untuk mengiterasi elemen-elemen dalam sebuah string:</p>
    <pre><code>
const nama = "W3Schools";

for (const x of nama) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h3>Iterasi atas Array</h3>
    <p>Anda dapat menggunakan perulangan <code>for..of</code> untuk mengiterasi elemen-elemen dalam sebuah Array:</p>
    <pre><code>
const huruf = ["a", "b", "c"];

for (const x of huruf) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <pre><code>
const angka = [2, 4, 6, 8];

for (const x of angka) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h3>Iterasi atas Set</h3>
    <p>Anda dapat menggunakan perulangan <code>for..of</code> untuk mengiterasi elemen-elemen dalam sebuah Set:</p>
    <pre><code>
const hurufSet = new Set(["a", "b", "c"]);

for (const x of hurufSet) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <p><strong>Catatan:</strong> Set dan Map akan dibahas pada bab selanjutnya.</p>

    <h3>Iterasi atas Map</h3>
    <p>Anda dapat menggunakan perulangan <code>for..of</code> untuk mengiterasi elemen-elemen dalam sebuah Map:</p>
    <pre><code>
const buah = new Map([
  ["apel", 500],
  ["pisang", 300],
  ["jeruk", 200]
]);

for (const x of buah) {
  // blok kode yang akan dieksekusi
}
    </code></pre>

    <h2>JavaScript Iterators</h2>
    <p>Protokol <code>iterator</code> mendefinisikan bagaimana menghasilkan urutan nilai dari suatu objek.</p>

    <p>Sebuah objek menjadi iterator ketika objek tersebut mengimplementasikan metode <code>next()</code>.</p>

    <p>Metode <code>next()</code> harus mengembalikan objek dengan dua properti:</p>
    <ul>
        <li><strong>value:</strong> nilai berikutnya</li>
        <li><strong>done:</strong> nilai true atau false</li>
    </ul>

    <p><strong>value:</strong> Nilai yang dikembalikan oleh iterator (dapat diabaikan jika <code>done</code> bernilai true)<br>
       <strong>done:</strong> true jika iterator telah selesai, false jika iterator masih menghasilkan nilai baru.</p>

    <p><strong>Catatan:</strong> Secara teknis, iterable harus mengimplementasikan metode <code>Symbol.iterator</code>. String, Array, TypedArray, Map, dan Set semuanya adalah iterable, karena objek prototipe mereka memiliki metode <code>Symbol.iterator</code>.</p>

    <h2>Iterable Buatan Sendiri</h2>
    <p>Iterable ini menghasilkan urutan tak terhingga: 10, 20, 30, 40, ... Setiap kali metode <code>next()</code> dipanggil:</p>
    <pre><code>
// Iterable Buatan Sendiri
function myNumbers() {
  let n = 0;
  return {
    next: function() {
      n += 10;
      return {value: n, done: false};
    }
  };
}

// Membuat Iterable
const n = myNumbers();
n.next(); // Menghasilkan 10
n.next(); // Menghasilkan 20
n.next(); // Menghasilkan 30
    </code></pre>

    <p><strong>Masalah dengan iterable buatan sendiri:</strong> Iterable ini tidak mendukung perulangan <code>for..of</code> JavaScript.</p>

    <p>Sebuah iterable dalam JavaScript adalah objek yang memiliki <code>Symbol.iterator</code>.</p>

    <p><code>Symbol.iterator</code> adalah sebuah fungsi yang mengembalikan fungsi <code>next()</code>.</p>

    <p>Sebuah iterable dapat diiterasi dengan kode:</p>
    <pre><code>
for (const x of iterable) {
  // Kode apapun di sini
}
    </code></pre>

    <h3>Contoh:</h3>
    <pre><code>
// Membuat Objek
myNumbers = {};

// Membuatnya Iterable
myNumbers[Symbol.iterator] = function() {
  let n = 0;
  done = false;
  return {
    next() {
      n += 10;
      if (n == 100) { done = true; }
      return { value: n, done: done };
    }
  };
}

// Sekarang dapat menggunakan for..of
for (const num of myNumbers) {
  // Kode apapun di sini
}
    </code></pre>

    <p><strong>Catatan:</strong> Metode <code>Symbol.iterator</code> akan dipanggil secara otomatis oleh perulangan <code>for..of</code>.</p>

    <p>Namun, kita juga bisa melakukannya secara manual:</p>

    <pre><code>
let iterator = myNumbers[Symbol.iterator]();

while (true) {
  const result = iterator.next();
  if (result.done) break;
  // Kode apapun di sini
}
    </code></pre>

    <br>
    <a href="#break" class="btn-prev">&larr; Previous</a>
    <a href="#sets" class="btn-next">Next &rarr;</a>        
</section>

<section id="sets" class="content hidden">
    <h1>Sets dalam JavaScript</h1>

    <p><strong>Set</strong> dalam JavaScript adalah koleksi nilai yang unik.</p>
    <p>Setiap nilai hanya boleh muncul sekali dalam sebuah Set.</p>
    <p>Nilai-nilai dalam Set dapat berupa tipe data apa saja, baik nilai primitif maupun objek.</p>
    
    <h2>Cara Membuat Set</h2>
    <p>Anda dapat membuat Set JavaScript dengan cara:</p>
    <ul>
        <li>Melewatkan array ke konstruktor <code>new Set()</code></li>
        <li>Membuat Set kosong dan menggunakan metode <code>add()</code> untuk menambahkan nilai</li>
    </ul>
    
    <h3>Metode <code>new Set()</code></h3>
    <p>Anda dapat melewatkan sebuah array ke konstruktor <code>new Set()</code> untuk membuat Set.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);
    </code></pre>
    
    <h3>Membuat Set dan Menambahkan Nilai</h3>
    <p>Anda dapat membuat Set kosong dan menambahkan nilai menggunakan metode <code>add()</code>.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set();

// Menambahkan Nilai ke Set
huruf.add("a");
huruf.add("b");
huruf.add("c");
    </code></pre>
    
    <h3>Membuat Set dan Menambahkan Variabel</h3>
    <p>Anda juga bisa membuat variabel terlebih dahulu, lalu menambahkannya ke Set.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set();

// Membuat Variabel
const a = "a";
const b = "b";
const c = "c";

// Menambahkan Variabel ke Set
huruf.add(a);
huruf.add(b);
huruf.add(c);
    </code></pre>
    
    <h2>Metode <code>add()</code></h2>
    <p>Metode <code>add()</code> digunakan untuk menambahkan nilai ke dalam Set.</p>
    <p>Contoh:</p>
    <pre><code>
huruf.add("d");
huruf.add("e");
    </code></pre>
    
    <p>Jika Anda menambahkan elemen yang sudah ada, hanya elemen pertama yang akan disimpan.</p>
    <p>Contoh:</p>
    <pre><code>
huruf.add("a");
huruf.add("b");
huruf.add("c");
huruf.add("c");  // Tidak akan menambah "c" lagi
huruf.add("c");  // Tidak akan menambah "c" lagi
huruf.add("c");  // Tidak akan menambah "c" lagi
    </code></pre>
    
    <h2>Menampilkan Elemen-elemen Set</h2>
    <p>Anda bisa menampilkan semua elemen (nilai) dalam Set menggunakan perulangan <code>for..of</code>.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua Elemen
let teks = "";
for (const x of huruf) {
  teks += x;
}
    </code></pre>
    
    <h2>Set adalah Objek</h2>
    <p>Set dalam JavaScript adalah sebuah objek. Anda dapat memeriksa tipe data objek dengan <code>typeof</code>.</p>
    <p>Contoh:</p>
    <pre><code>
typeof huruf;  // Mengembalikan "object"
    </code></pre>
    
    <p>Anda juga bisa menggunakan <code>instanceof</code> untuk memeriksa apakah objek tersebut merupakan instansi dari Set.</p>
    <p>Contoh:</p>
    <pre><code>
huruf instanceof Set;  // Mengembalikan true
    </code></pre>
    
    <br>
    <a href="#iterables" class="btn-prev">&larr; Previous</a>
    <a href="#set-methods" class="btn-next">Next &rarr;</a>        
</section>

<section id="set-methods" class="content hidden">
    <h1>Metode Set dalam JavaScript</h1>

    <p>Set dalam JavaScript adalah objek koleksi yang menyimpan nilai-nilai unik tanpa urutan tertentu. Di sini, kita akan mempelajari berbagai metode yang digunakan dalam objek Set.</p>

    <h2>Metode <code>new Set()</code></h2>
    <p>Anda dapat membuat Set dengan melewatkan sebuah array ke konstruktor <code>new Set()</code>.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);
    </code></pre>

    <h2>Metode <code>add()</code></h2>
    <p>Metode <code>add()</code> digunakan untuk menambahkan nilai ke dalam Set.</p>
    <p>Contoh:</p>
    <pre><code>
huruf.add("d");
huruf.add("e");
    </code></pre>

    <p>Jika Anda menambahkan elemen yang sudah ada, hanya elemen pertama yang akan disimpan.</p>
    <p>Contoh:</p>
    <pre><code>
huruf.add("a");
huruf.add("b");
huruf.add("c");
huruf.add("c");  // Tidak akan menambah "c" lagi
huruf.add("c");  // Tidak akan menambah "c" lagi
huruf.add("c");  // Tidak akan menambah "c" lagi
    </code></pre>

    <h2>Menampilkan Elemen-elemen Set</h2>
    <p>Anda dapat menampilkan semua elemen dalam Set menggunakan perulangan <code>for..of</code>.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua Elemen
let teks = "";
for (const x of huruf) {
  teks += x;
}
    </code></pre>

    <h2>Metode <code>has()</code></h2>
    <p>Metode <code>has()</code> digunakan untuk memeriksa apakah suatu nilai ada di dalam Set. Metode ini mengembalikan nilai <code>true</code> jika nilai yang ditentukan ada dalam Set, dan <code>false</code> jika tidak ada.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Apakah Set mengandung "d"?
const jawaban = huruf.has("d");
    </code></pre>

    <h2>Metode <code>forEach()</code></h2>
    <p>Metode <code>forEach()</code> memanggil sebuah fungsi untuk setiap elemen dalam Set.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua elemen
let teks = "";
huruf.forEach(function(value) {
  teks += value;
});
    </code></pre>

    <h2>Metode <code>values()</code></h2>
    <p>Metode <code>values()</code> mengembalikan objek Iterator yang berisi nilai-nilai dalam Set.</p>
    <p>Contoh 1:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Mendapatkan semua Nilai
const myIterator = huruf.values();

// Menampilkan semua Nilai
let teks = "";
for (const entry of myIterator) {
  teks += entry;
}
    </code></pre>

    <p>Contoh 2:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua Nilai
let teks = "";
for (const entry of huruf.values()) {
  teks += entry;
}
    </code></pre>

    <h2>Metode <code>keys()</code></h2>
    <p>Metode <code>keys()</code> mengembalikan objek Iterator yang berisi nilai-nilai dalam Set.</p>
    <p><strong>Catatan:</strong> Set tidak memiliki kunci, jadi <code>keys()</code> mengembalikan nilai yang sama dengan <code>values()</code>. Ini membuat Set kompatibel dengan Map.</p>
    <p>Contoh 1:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Membuat Iterator
const myIterator = huruf.keys();

// Menampilkan semua elemen
let teks = "";
for (const x of myIterator) {
  teks += x;
}
    </code></pre>

    <p>Contoh 2:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua elemen
let teks = "";
for (const x of huruf.keys()) {
  teks += x;
}
    </code></pre>

    <h2>Metode <code>entries()</code></h2>
    <p>Metode <code>entries()</code> mengembalikan objek Iterator yang berisi pasangan [nilai, nilai] dari sebuah Set.</p>
    <p><strong>Catatan:</strong> Metode <code>entries()</code> seharusnya mengembalikan pasangan [kunci, nilai] dari sebuah objek. Karena Set tidak memiliki kunci, metode <code>entries()</code> mengembalikan [nilai, nilai]. Ini membuat Set kompatibel dengan Map.</p>
    <p>Contoh 1:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Mendapatkan semua Entries
const myIterator = huruf.entries();

// Menampilkan semua Entries
let teks = "";
for (const entry of myIterator) {
  teks += entry;
}
    </code></pre>

    <p>Contoh 2:</p>
    <pre><code>
// Membuat Set
const huruf = new Set(["a", "b", "c"]);

// Menampilkan semua Entries
let teks = "";
for (const entry of huruf.entries()) {
  teks += entry;
}
    </code></pre>

    <br>
    <a href="#sets" class="btn-prev">&larr; Previous</a>
    <a href="#maps" class="btn-next">Next &rarr;</a>        
</section>

<section id="maps" class="content hidden">
    <h1>Maps dalam JavaScript</h1>

    <p><strong>Map</strong> adalah struktur data yang menyimpan pasangan kunci-nilai, di mana kunci dapat memiliki berbagai tipe data. Selain itu, <strong>Map</strong> mengingat urutan penyisipan kunci, sehingga urutan elemen dalam Map tetap terjaga.</p>

    <h2>Cara Membuat Map</h2>
    <p>Anda dapat membuat Map dalam JavaScript dengan beberapa cara berikut:</p>

    <h3>1. Menggunakan Array yang Dilewatkan ke Konstruktor <code>new Map()</code></h3>
    <p>Anda dapat membuat Map dengan melewatkan sebuah array berisi pasangan kunci-nilai ke konstruktor <code>new Map()</code>.</p>
    
    <p>Contoh:</p>
    <pre><code>
// Membuat Map
const buah = new Map([
  ["apel", 500],
  ["pisang", 300],
  ["jeruk", 200]
]);
    </code></pre>

    <h3>2. Menggunakan Metode <code>set()</code></h3>
    <p>Anda juga dapat membuat Map dengan menggunakan metode <code>set()</code> untuk menambahkan elemen-elemen ke dalam Map.</p>
    
    <p>Contoh:</p>
    <pre><code>
// Membuat Map
const buah = new Map();

// Menambahkan nilai ke Map
buah.set("apel", 500);
buah.set("pisang", 300);
buah.set("jeruk", 200);
    </code></pre>

    <p>Metode <code>set()</code> juga bisa digunakan untuk mengubah nilai Map yang sudah ada.</p>
    
    <p>Contoh:</p>
    <pre><code>
buah.set("apel", 200);  // Mengubah nilai apel menjadi 200
    </code></pre>

    <h2>Metode <code>get()</code></h2>
    <p>Metode <code>get()</code> digunakan untuk mendapatkan nilai berdasarkan kunci di dalam Map.</p>

    <p>Contoh:</p>
    <pre><code>
buah.get("apel");  // Mengembalikan 500
    </code></pre>

    <h2>Map Adalah Objek</h2>
    <p>Map dalam JavaScript adalah objek, dan untuk memeriksa tipe data dari Map, Anda bisa menggunakan operator <code>typeof</code> dan <code>instanceof</code>.</p>

    <p>Contoh:</p>
    <pre><code>
// Mengembalikan "object":
typeof buah;

// Mengembalikan true:
buah instanceof Map;
    </code></pre>

    <h2>Perbandingan antara Objek JavaScript dan Map</h2>
    <p>Berikut adalah perbedaan antara <strong>Objek</strong> dan <strong>Map</strong> dalam JavaScript:</p>

    <table>
        <tr>
            <th>Objek</th>
            <th>Map</th>
        </tr>
        <tr>
            <td>Tidak langsung dapat diiterasi</td>
            <td>Dapat langsung diiterasi</td>
        </tr>
        <tr>
            <td>Tidak memiliki properti ukuran</td>
            <td>Memiliki properti ukuran (<code>size</code>)</td>
        </tr>
        <tr>
            <td>Kunci harus berupa String atau Symbol</td>
            <td>Kunci dapat berupa tipe data apa saja</td>
        </tr>
        <tr>
            <td>Kunci tidak terurut dengan baik</td>
            <td>Kunci terurut berdasarkan urutan penyisipan</td>
        </tr>
        <tr>
            <td>Memiliki kunci default</td>
            <td>Tidak memiliki kunci default</td>
        </tr>
    </table>

    <p>Dengan penjelasan ini, Anda dapat memahami cara kerja dan perbedaan mendasar antara objek dan Map dalam JavaScript serta berbagai metode yang dapat digunakan untuk mengelola Map.</p>

    <br>
    <a href="#set-methods" class="btn-prev">&larr; Previous</a>
    <a href="#map-methods" class="btn-next">Next &rarr;</a>
</section>

<section id="map-methods" class="content hidden">
    <h1>Metode Map dalam JavaScript</h1>

    <p>Metode Map dalam JavaScript digunakan untuk menyimpan pasangan kunci/nilai dan memberikan berbagai cara untuk mengelola data dengan lebih efisien.</p>

    <h2>1. Metode <code>new Map()</code></h2>
    <p>Anda dapat membuat Map dengan melewatkan array ke konstruktor <code>new Map()</code>:</p>
    <pre><code>
// Membuat Map
const buah = new Map([
  ["apel", 500],
  ["pisang", 300],
  ["jeruk", 200]
]);
    </code></pre>

    <h2>2. Metode <code>get()</code></h2>
    <p>Metode <code>get()</code> digunakan untuk mendapatkan nilai berdasarkan kunci di dalam Map:</p>
    <pre><code>
buah.get("apel");
    </code></pre>

    <h2>3. Metode <code>set()</code></h2>
    <p>Anda dapat menambahkan elemen ke dalam Map menggunakan metode <code>set()</code>:</p>
    <pre><code>
// Membuat Map
const buah = new Map();

// Menambahkan nilai ke Map
buah.set("apel", 500);
buah.set("pisang", 300);
buah.set("jeruk", 200);
    </code></pre>
    <p>Metode <code>set()</code> juga bisa digunakan untuk mengubah nilai Map yang sudah ada:</p>
    <pre><code>
buah.set("apel", 500);  // Mengubah nilai apel menjadi 500
    </code></pre>

    <h2>4. Properti <code>size</code></h2>
    <p>Properti <code>size</code> mengembalikan jumlah elemen dalam Map:</p>
    <pre><code>
buah.size;
    </code></pre>

    <h2>5. Metode <code>delete()</code></h2>
    <p>Metode <code>delete()</code> digunakan untuk menghapus elemen dari Map:</p>
    <pre><code>
buah.delete("apel");
    </code></pre>

    <h2>6. Metode <code>clear()</code></h2>
    <p>Metode <code>clear()</code> digunakan untuk menghapus semua elemen dalam Map:</p>
    <pre><code>
buah.clear();
    </code></pre>

    <h2>7. Metode <code>has()</code></h2>
    <p>Metode <code>has()</code> mengembalikan nilai <code>true</code> jika sebuah kunci ada dalam Map:</p>
    <pre><code>
buah.has("apel");
    </code></pre>

    <h2>8. Metode <code>forEach()</code></h2>
    <p>Metode <code>forEach()</code> memanggil fungsi callback untuk setiap pasangan kunci/nilai dalam Map:</p>
    <pre><code>
// Menampilkan semua entri
let teks = "";
buah.forEach(function(value, key) {
  teks += key + ' = ' + value;
});
    </code></pre>

    <h2>9. Metode <code>entries()</code></h2>
    <p>Metode <code>entries()</code> mengembalikan objek iterator yang berisi pasangan [kunci, nilai] dalam Map:</p>
    <pre><code>
// Menampilkan semua entri
let teks = "";
for (const x of buah.entries()) {
  teks += x;
}
    </code></pre>

    <h2>10. Metode <code>keys()</code></h2>
    <p>Metode <code>keys()</code> mengembalikan objek iterator yang berisi semua kunci dalam Map:</p>
    <pre><code>
// Menampilkan semua kunci
let teks = "";
for (const x of buah.keys()) {
  teks += x;
}
    </code></pre>

    <h2>11. Metode <code>values()</code></h2>
    <p>Metode <code>values()</code> mengembalikan objek iterator yang berisi semua nilai dalam Map:</p>
    <pre><code>
// Menampilkan semua nilai
let teks = "";
for (const x of buah.values()) {
  teks += x;
}
    </code></pre>
    <p>Anda juga bisa menggunakan metode <code>values()</code> untuk menjumlahkan nilai-nilai dalam Map:</p>
    <pre><code>
// Menjumlahkan semua nilai
let total = 0;
for (const x of buah.values()) {
  total += x;
}
    </code></pre>

    <h2>12. Objek sebagai Kunci</h2>
    <p>Kemampuan untuk menggunakan objek sebagai kunci adalah fitur penting dari Map:</p>
    <pre><code>
// Membuat objek
const apel = {nama: 'Apel'};
const pisang = {nama: 'Pisang'};
const jeruk = {nama: 'Jeruk'};

// Membuat Map
const buah = new Map();

// Menambahkan elemen baru ke Map
buah.set(apel, 500);
buah.set(pisang, 300);
buah.set(jeruk, 200);
    </code></pre>
    <p>Ingat: Kunci adalah objek (<code>apel</code>), bukan string ("apel"):</p>
    <pre><code>
buah.get("apel");  // Mengembalikan undefined
    </code></pre>

    <h2>13. Metode <code>Map.groupBy()</code> (JavaScript ES2024)</h2>
    <p>Metode <code>Map.groupBy()</code> ditambahkan pada JavaScript ES2024 untuk mengelompokkan elemen-elemen dalam sebuah objek sesuai dengan nilai string yang dikembalikan dari fungsi callback.</p>
    <p>Metode <code>Map.groupBy()</code> tidak mengubah objek aslinya:</p>
    <pre><code>
// Membuat array
const buah = [
  {nama: "apel", jumlah: 300},
  {nama: "pisang", jumlah: 500},
  {nama: "jeruk", jumlah: 200},
  {nama: "kiwi", jumlah: 150}
];

// Fungsi callback untuk mengelompokkan elemen
function myCallback({ jumlah }) {
  return jumlah > 200 ? "ok" : "low";
}

// Mengelompokkan berdasarkan jumlah
const hasil = Map.groupBy(buah, myCallback);
    </code></pre>

    <br>
    <a href="#maps" class="btn-prev">&larr; Previous</a>
    <a href="#typeof" class="btn-next">Next &rarr;</a>        
</section>

<section id="typeof" class="content hidden">
    <h1>Operator `typeof` dalam JavaScript</h1>
    
    <p>Operator <code>typeof</code> digunakan untuk mengembalikan tipe data dari sebuah variabel di JavaScript.</p>
    
    <h2>Tipe Data Primitif</h2>
    <p>Di JavaScript, nilai primitif adalah nilai tunggal yang tidak memiliki properti atau metode.</p>
    <p>JavaScript memiliki 7 tipe data primitif:</p>
    <ul>
        <li>string</li>
        <li>number</li>
        <li>boolean</li>
        <li>bigint</li>
        <li>symbol</li>
        <li>null</li>
        <li>undefined</li>
    </ul>

    <h3>Contoh:</h3>
    <pre><code>
typeof "John"         // Mengembalikan string
typeof ("John"+"Doe") // Mengembalikan string
typeof 3.14           // Mengembalikan number
typeof 33             // Mengembalikan number
typeof (33 + 66)      // Mengembalikan number
typeof true           // Mengembalikan boolean
typeof false          // Mengembalikan boolean
typeof 1234n          // Mengembalikan bigint
typeof Symbol()       // Mengembalikan symbol
typeof x              // Mengembalikan undefined
typeof null           // Mengembalikan object
    </code></pre>

    <p><strong>Catatan:</strong>  
    Di JavaScript, <code>null</code> adalah nilai primitif. Namun, operator <code>typeof</code> mengembalikan "object". Ini adalah bug yang sudah dikenal di JavaScript dan memiliki alasan historis.</p>

    <h2>Tipe Data Kompleks</h2>
    <p>Tipe data kompleks dapat menyimpan beberapa nilai dan/atau tipe data yang berbeda bersama-sama. JavaScript memiliki satu tipe data kompleks:</p>
    <ul>
        <li>object</li>
    </ul>
    <p>Tipe kompleks lainnya seperti array, fungsi, set, dan map hanyalah jenis objek yang berbeda.</p>
    <p>Operator <code>typeof</code> hanya mengembalikan dua tipe:</p>
    <ul>
        <li>object</li>
        <li>function</li>
    </ul>

    <h3>Contoh:</h3>
    <pre><code>
typeof {name:'John'}   // Mengembalikan object
typeof [1,2,3,4]       // Mengembalikan object
typeof new Map()       // Mengembalikan object
typeof new Set()       // Mengembalikan object

typeof function (){}   // Mengembalikan function
    </code></pre>

    <h2>Cara Mengenali Array</h2>
    <p>Bagaimana cara mengetahui jika sebuah variabel adalah array? ECMAScript 5 (2009) mendefinisikan metode baru untuk ini: <code>Array.isArray()</code>.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
// Membuat Array
const fruits = ["apel", "pisang", "jeruk"];
Array.isArray(fruits);
    </code></pre>

    <h2>Operator `instanceof`</h2>
    <p>Operator <code>instanceof</code> mengembalikan <code>true</code> jika sebuah objek adalah instansi dari tipe objek tertentu:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
// Membuat sebuah Date
const time = new Date();
(time instanceof Date);

// Membuat sebuah Array
const fruits = ["apel", "pisang", "jeruk"];
(fruits instanceof Array);

// Membuat sebuah Map
const fruits = new Map([
  ["apel", 500],
  ["pisang", 300],
  ["jeruk", 200]
]);
(fruits instanceof Map);

// Membuat sebuah Set
const fruits = new Set(["apel", "pisang", "jeruk"]);
(fruits instanceof Set);
    </code></pre>

    <h2>Variabel yang Tidak Terdefinisi</h2>
    <p><code>typeof</code> dari variabel yang tidak terdefinisi adalah <code>undefined</code>.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
typeof car;
    </code></pre>

    <p><code>typeof</code> dari variabel yang tidak memiliki nilai adalah <code>undefined</code>. Nilai tersebut juga <code>undefined</code>.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
let car;
typeof car;
    </code></pre>

    <p>Variabel apa pun bisa dikosongkan dengan mengatur nilainya ke <code>undefined</code>.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
let car = "Volvo";
car = undefined;
    </code></pre>

    <h2>Nilai Kosong</h2>
    <p>Nilai kosong tidak ada hubungannya dengan <code>undefined</code>.</p>
    <p>Sebuah string kosong memiliki nilai yang sah dan tipe yang sah.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
let car = "";
typeof car;
    </code></pre>

    <h2>Null</h2>
    <p>Di JavaScript, <code>null</code> adalah "tidak ada apa-apa". Seharusnya ini menjadi sesuatu yang tidak ada. Namun, di JavaScript, tipe data dari <code>null</code> adalah objek.</p>
    
    <p>Anda bisa mengosongkan sebuah objek dengan mengaturnya ke <code>null</code>:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
// Membuat sebuah objek
let person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
person = null;
// Sekarang nilainya adalah null, tetapi tipe masih objek
    </code></pre>

    <p>Anda juga bisa mengosongkan sebuah objek dengan mengaturnya ke <code>undefined</code>:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
let person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
person = undefined;
// Sekarang nilainya dan tipe adalah undefined
    </code></pre>

    <h2>Perbedaan Antara <code>undefined</code> dan <code>null</code></h2>
    <p><code>undefined</code> dan <code>null</code> memiliki nilai yang sama tetapi tipe yang berbeda:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
typeof undefined      // undefined
typeof null           // object

null === undefined    // false
null == undefined     // true
    </code></pre>

    <h2>Properti Konstruktor</h2>
    <p>Properti konstruktor mengembalikan fungsi konstruktor untuk semua variabel JavaScript.</p>
    
    <h3>Contoh:</h3>
    <pre><code>
// Mengembalikan fungsi Object() {[native code]}:
{name:'John',age:34}.constructor

// Mengembalikan fungsi Array() {[native code]}:
[1,2,3,4].constructor

// Mengembalikan fungsi Date() {[native code]}:
new Date().constructor

// Mengembalikan fungsi Set() {[native code]}:
new Set().constructor

// Mengembalikan fungsi Map() {[native code]}:
new Map().constructor

// Mengembalikan fungsi Function() {[native code]}:
function () {}.constructor
    </code></pre>

    <p>Dengan konstruktor, Anda bisa memeriksa apakah sebuah objek adalah sebuah Array:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
(myArray.constructor === Array);
    </code></pre>

    <p>Dengan konstruktor, Anda bisa memeriksa apakah sebuah objek adalah sebuah Date:</p>
    
    <h3>Contoh:</h3>
    <pre><code>
(myDate.constructor === Date);
    </code></pre>

    <h2>Semuanya Bersama-sama</h2>
    <pre><code>
typeof "John"          // Mengembalikan "string"
typeof ("John"+"Doe")  // Mengembalikan "string"
typeof 3.14            // Mengembalikan "number"
typeof (33 + 66)       // Mengembalikan "number"
typeof NaN             // Mengembalikan "number"
typeof 1234n           // Mengembalikan "bigint"
typeof true            // Mengembalikan "boolean"
typeof false           // Mengembalikan "boolean"
typeof {name:'John'}   // Mengembalikan "object"
typeof [1,2,3,4]       // Mengembalikan "object"
typeof {}              // Mengembalikan "object"
typeof []              // Mengembalikan "object"
typeof new Object()    // Mengembalikan "object"
typeof new Array()     // Mengembalikan "object"
typeof new Date()      // Mengembalikan "object"
typeof new Set()       // Mengembalikan "object"
typeof new Map()       // Mengembalikan "object"
typeof function () {}  // Mengembalikan "function"
typeof x               // Mengembalikan "undefined"
typeof null            // Mengembalikan "object"
    </code></pre>

    <p><strong>Catatan:</strong> Tipe data dari <code>NaN</code> (Not a Number) adalah <code>number</code>!</p>

    <h2>Operator <code>void</code></h2>
    <p>Operator <code>void</code> mengevaluasi sebuah ekspresi dan mengembalikan <code>undefined</code>. Operator ini sering digunakan untuk memperoleh nilai primitif <code>undefined</code>, dengan menggunakan <code>void(0)</code> (berguna ketika mengevaluasi ekspresi tanpa menggunakan nilai kembalian).</p>
    
    <h3>Contoh:</h3>
    <pre><code>
<a href="javascript:void(0);">
  Link yang tidak berguna
</a>

<a href="javascript:void(document.body.style.backgroundColor='red');">
  Klik saya untuk mengubah warna latar belakang body menjadi merah
</a>
    </code></pre>

    <br>
    <a href="#map-methods" class="btn-prev">&larr; Previous</a>
    <a href="#type-conversion" class="btn-next">Next &rarr;</a>        
</section>

<section id="type-conversion" class="content hidden">
    <h1>Konversi Tipe Data JavaScript</h1>

    <p>Konversi tipe data di JavaScript dapat dilakukan dengan dua cara:</p>
    <ol>
        <li>Menggunakan fungsi JavaScript.</li>
        <li>Secara otomatis oleh JavaScript itu sendiri.</li>
    </ol>

    <h2>Mengonversi String ke Angka</h2>
    <p>Metode global <code>Number()</code> mengonversi sebuah variabel (atau nilai) menjadi angka.</p>
    <ul>
        <li>String angka (seperti "3.14") dikonversi menjadi angka (seperti 3.14).</li>
        <li>String kosong (seperti "") dikonversi menjadi 0.</li>
        <li>String non-angka (seperti "John") dikonversi menjadi NaN (Not a Number).</li>
    </ul>
    <p>Contoh:</p>
    <pre><code>Number("3.14")</code></pre>
    <pre><code>Number(Math.PI)</code></pre>
    <pre><code>Number(" ")</code></pre>
    <pre><code>Number("")</code></pre>

    <p>Contoh yang tidak dapat dikonversi:</p>
    <pre><code>Number("99 88")</code></pre>
    <pre><code>Number("John")</code></pre>

    <h3>Metode untuk Mengonversi String ke Angka</h3>
    <table>
        <thead>
            <tr>
                <th>Metode</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>Number()</code></td>
                <td>Mengembalikan angka, dikonversi dari argumennya</td>
            </tr>
            <tr>
                <td><code>parseFloat()</code></td>
                <td>Mengurai string dan mengembalikan angka pecahan</td>
            </tr>
            <tr>
                <td><code>parseInt()</code></td>
                <td>Mengurai string dan mengembalikan angka bulat</td>
            </tr>
        </tbody>
    </table>

    <h3>Operator Unary +</h3>
    <p>Operator unary <code>+</code> dapat digunakan untuk mengonversi variabel menjadi angka:</p>
    <pre><code>let y = "5";      // y adalah string</code></pre>
    <pre><code>let x = + y;      // x menjadi angka</code></pre>

    <p>Jika variabel tidak dapat dikonversi, maka nilainya akan menjadi NaN (Not a Number):</p>
    <pre><code>let y = "John";   // y adalah string</code></pre>
    <pre><code>let x = + y;      // x menjadi angka (NaN)</code></pre>

    <h2>Mengonversi Angka ke String</h2>
    <p>Metode global <code>String()</code> dapat mengonversi angka menjadi string.</p>
    <pre><code>String(x)         // mengembalikan string dari variabel angka x</code></pre>
    <pre><code>String(123)       // mengembalikan string dari angka literal 123</code></pre>
    <pre><code>String(100 + 23)  // mengembalikan string dari ekspresi angka</code></pre>

    <h3>Metode Lain untuk Mengonversi Angka ke String</h3>
    <table>
        <thead>
            <tr>
                <th>Metode</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>toExponential()</code></td>
                <td>Mengembalikan string, dengan angka dibulatkan menggunakan notasi eksponensial</td>
            </tr>
            <tr>
                <td><code>toFixed()</code></td>
                <td>Mengembalikan string, dengan angka dibulatkan dengan jumlah desimal yang ditentukan</td>
            </tr>
            <tr>
                <td><code>toPrecision()</code></td>
                <td>Mengembalikan string, dengan angka ditulis dengan panjang tertentu</td>
            </tr>
        </tbody>
    </table>

    <h2>Mengonversi Tanggal ke Angka</h2>
    <p>Metode global <code>Number()</code> dapat digunakan untuk mengonversi tanggal ke angka.</p>
    <pre><code>d = new Date();</code></pre>
    <pre><code>Number(d)          // mengembalikan angka 1404568027739</code></pre>

    <h2>Mengonversi Tanggal ke String</h2>
    <p>Metode global <code>String()</code> dapat mengonversi tanggal ke string.</p>
    <pre><code>String(Date())  // mengembalikan "Thu Jul 17 2014 15:38:19 GMT+0200 (W. Europe Daylight Time)"</code></pre>

    <h2>Mengonversi Boolean ke Angka</h2>
    <p>Metode global <code>Number()</code> juga dapat mengonversi boolean menjadi angka.</p>
    <pre><code>Number(false)     // mengembalikan 0</code></pre>
    <pre><code>Number(true)      // mengembalikan 1</code></pre>

    <h2>Mengonversi Boolean ke String</h2>
    <p>Metode global <code>String()</code> dapat mengonversi boolean menjadi string.</p>
    <pre><code>String(false)      // mengembalikan "false"</code></pre>
    <pre><code>String(true)       // mengembalikan "true"</code></pre>

    <h2>Konversi Tipe Otomatis</h2>
    <p>Saat JavaScript mencoba untuk beroperasi pada tipe data yang "salah", ia akan mencoba mengonversi nilai menjadi tipe yang benar.</p>
    <pre><code>5 + null    // mengembalikan 5         karena null dikonversi menjadi 0</code></pre>
    <pre><code>"5" + null  // mengembalikan "5null"   karena null dikonversi menjadi "null"</code></pre>
    <pre><code>"5" + 2     // mengembalikan "52"      karena 2 dikonversi menjadi "2"</code></pre>
    <pre><code>"5" - 2     // mengembalikan 3         karena "5" dikonversi menjadi 5</code></pre>
    <pre><code>"5" * "2"   // mengembalikan 10        karena "5" dan "2" dikonversi menjadi 5 dan 2</code></pre>

    <h2>Tabel Konversi Tipe Data JavaScript</h2>
    <table>
        <thead>
            <tr>
                <th>Nilai Asli</th>
                <th>Konversi ke Number</th>
                <th>Konversi ke String</th>
                <th>Konversi ke Boolean</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>false</td>
                <td>0</td>
                <td>"false"</td>
                <td>false</td>
            </tr>
            <tr>
                <td>true</td>
                <td>1</td>
                <td>"true"</td>
                <td>true</td>
            </tr>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>"0"</td>
                <td>false</td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>"1"</td>
                <td>true</td>
            </tr>
            <tr>
                <td>"0"</td>
                <td>0</td>
                <td>"0"</td>
                <td>true</td>
            </tr>
            <tr>
                <td>"000"</td>
                <td>0</td>
                <td>"000"</td>
                <td>true</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="#typeof" class="btn-prev">&larr; Previous</a>
    <a href="#destructuring" class="btn-next">Next &rarr;</a>
</section>

<section id="destructuring" class="content hidden">
    <h1>Destructuring JavaScript</h1>
    <p>Destructuring adalah sintaksis JavaScript yang memungkinkan Anda membongkar properti objek atau elemen array menjadi variabel secara lebih mudah dan jelas.</p>

    <h2>Sintaksis Destructuring Assignment</h2>
    <p>Sintaksis destructuring assignment digunakan untuk membongkar properti objek menjadi variabel:</p>
    <pre><code>
    let {firstName, lastName} = person;
    </code></pre>
    <p>Sintaksis ini juga dapat digunakan untuk membongkar array dan iterable lainnya:</p>
    <pre><code>
    let [firstName, lastName] = person;
    </code></pre>

    <h2>Destructuring Objek</h2>
    <p>Destructuring objek memungkinkan kita untuk membongkar nilai properti objek ke dalam variabel terpisah.</p>
    <p>Contoh:</p>
    <pre><code>
// Membuat sebuah objek
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50
};

// Destructuring
let {firstName, lastName} = person;
    </code></pre>

    <p>Urutan properti tidak masalah:</p>
    <pre><code>
// Membuat sebuah objek
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50
};

// Destructuring
let {lastName, firstName} = person;
    </code></pre>

    <p><strong>Catatan:</strong> Destructuring tidak bersifat destruktif. Ini tidak mengubah objek asli.</p>

    <h2>Nilai Default pada Destructuring Objek</h2>
    <p>Untuk properti yang mungkin hilang, kita bisa menetapkan nilai default:</p>
    <pre><code>
// Membuat sebuah objek
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50
};

// Destructuring
let {firstName, lastName, country = "US"} = person;
    </code></pre>

    <h2>Alias Properti Objek</h2>
    <p>Destructuring juga mendukung pemberian alias pada properti objek:</p>
    <pre><code>
// Membuat sebuah objek
const person = {
  firstName: "John",
  lastName: "Doe",
  age: 50
};

// Destructuring
let {lastName: name} = person;
    </code></pre>

    <h2>Destructuring String</h2>
    <p>Destructuring dapat digunakan untuk membongkar karakter-karakter dalam string:</p>
    <pre><code>
// Membuat sebuah string
let name = "W3Schools";

// Destructuring
let [a1, a2, a3, a4, a5] = name;
    </code></pre>

    <p><strong>Catatan:</strong> Destructuring dapat digunakan dengan semua iterable.</p>

    <h2>Destructuring Array</h2>
    <p>Kita dapat memisahkan nilai-nilai dalam array ke dalam variabel kita sendiri:</p>
    <pre><code>
// Membuat sebuah array
const fruits = ["Bananas", "Oranges", "Apples", "Mangos"];

// Destructuring
let [fruit1, fruit2] = fruits;
    </code></pre>

    <h2>Melewatkan Nilai Array</h2>
    <p>Kita dapat melewatkan nilai-nilai dalam array dengan menggunakan dua koma atau lebih:</p>
    <pre><code>
// Membuat sebuah array
const fruits = ["Bananas", "Oranges", "Apples", "Mangos"];

// Destructuring
let [fruit1,,,fruit2] = fruits;
    </code></pre>

    <h2>Nilai Posisi Array</h2>
    <p>Kita dapat memilih nilai-nilai dari posisi indeks tertentu dalam array:</p>
    <pre><code>
// Membuat sebuah array
const fruits = ["Bananas", "Oranges", "Apples", "Mangos"];

// Destructuring
let {[0]:fruit1, [1]:fruit2} = fruits;
    </code></pre>

    <h2>Properti Rest</h2>
    <p>Kita bisa mengakhiri sintaksis destructuring dengan properti rest. Sintaksis ini akan menyimpan semua nilai yang tersisa ke dalam array baru:</p>
    <pre><code>
// Membuat sebuah array
const numbers = [10, 20, 30, 40, 50, 60, 70];

// Destructuring
const [a, b, ...rest] = numbers;
    </code></pre>

    <h2>Destructuring Maps</h2>
    <p>Destructuring juga dapat digunakan pada objek Map:</p>
    <pre><code>
// Membuat sebuah Map
const fruits = new Map([
  ["apples", 500],
  ["bananas", 300],
  ["oranges", 200]
]);

// Destructuring
let text = "";
for (const [key, value] of fruits) {
  text += key + " is " + value;
}
    </code></pre>

    <h2>Menukar Variabel JavaScript</h2>
    <p>Kita bisa menukar nilai dua variabel dengan menggunakan destructuring assignment:</p>
    <pre><code>
let firstName = "John";
let lastName = "Doe";

// Destructuring
[firstName, lastName] = [lastName, firstName];
    </code></pre>

    <br>
    <a href="#type-conversion" class="btn-prev">&larr; Previous</a>
    <a href="#bitwise" class="btn-next">Next &rarr;</a>        
</section>
<section id="bitwise" class="content hidden">
    <h1>Operasi Bitwise JavaScript</h1>

    <p>Operasi bitwise di JavaScript digunakan untuk bekerja langsung dengan bit-level data. Berikut adalah penjelasan mengenai berbagai operator bitwise dalam JavaScript:</p>
    
    <h2>Operator Bitwise JavaScript</h2>
    <table>
        <tr>
            <th>Operator</th>
            <th>Nama</th>
            <th>Deskripsi</th>
        </tr>
        <tr>
            <td>&</td>
            <td>AND</td>
            <td>Mengatur setiap bit menjadi 1 jika kedua bit adalah 1</td>
        </tr>
        <tr>
            <td>|</td>
            <td>OR</td>
            <td>Mengatur setiap bit menjadi 1 jika salah satu dari dua bit adalah 1</td>
        </tr>
        <tr>
            <td>^</td>
            <td>XOR</td>
            <td>Mengatur setiap bit menjadi 1 jika hanya satu dari dua bit yang 1</td>
        </tr>
        <tr>
            <td>~</td>
            <td>NOT</td>
            <td>Membalik semua bit</td>
        </tr>
        <tr>
            <td><<</td>
            <td>Zero fill left shift</td>
            <td>Menggeser ke kiri dengan menambahkan nol dari kanan dan membiarkan bit paling kiri jatuh</td>
        </tr>
        <tr>
            <td>> </td>
            <td>Signed right shift</td>
            <td>Menggeser ke kanan dengan menambahkan salinan bit paling kiri dari kiri dan membiarkan bit paling kanan jatuh</td>
        </tr>
        <tr>
            <td>>> </td>
            <td>Zero fill right shift</td>
            <td>Menggeser ke kanan dengan menambahkan nol dari kiri dan membiarkan bit paling kanan jatuh</td>
        </tr>
    </table>

    <h2>Contoh Operasi</h2>
    <table>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
            <th>Sama dengan</th>
            <th>Hasil Biner</th>
        </tr>
        <tr>
            <td>5 & 1</td>
            <td>1</td>
            <td>0101 & 0001</td>
            <td>0001</td>
        </tr>
        <tr>
            <td>5 | 1</td>
            <td>5</td>
            <td>0101 | 0001</td>
            <td>0101</td>
        </tr>
        <tr>
            <td>~5</td>
            <td>-6</td>
            <td>~0101</td>
            <td>1010</td>
        </tr>
        <tr>
            <td>5 << 1</td>
            <td>10</td>
            <td>0101 << 1</td>
            <td>1010</td>
        </tr>
        <tr>
            <td>5 ^ 1</td>
            <td>4</td>
            <td>0101 ^ 0001</td>
            <td>0100</td>
        </tr>
        <tr>
            <td>5 >> 1</td>
            <td>2</td>
            <td>0101 >> 1</td>
            <td>0010</td>
        </tr>
        <tr>
            <td>5 >>> 1</td>
            <td>2</td>
            <td>0101 >>> 1</td>
            <td>0010</td>
        </tr>
    </table>

    <h2>Operasi Bitwise dan 32-bit Operan di JavaScript</h2>
    <p>JavaScript menyimpan angka dalam format bilangan floating-point 64-bit, tetapi semua operasi bitwise dilakukan pada angka biner 32-bit. Sebelum operasi bitwise dilakukan, JavaScript mengonversi angka ke dalam format integer bertanda 32-bit. Setelah operasi bitwise selesai, hasilnya dikonversi kembali menjadi angka 64-bit JavaScript.</p>
    <p>Contoh di atas menggunakan angka biner 4-bit tak bertanda. Karena JavaScript menggunakan integer bertanda 32-bit, hasil operasi <code>~5</code> bukanlah 10, melainkan -6.</p>
    <pre><code>
    00000000000000000000000000000101 (5)
    11111111111111111111111111111010 (~5 = -6)
    </code></pre>

    <h2>Bitwise AND di JavaScript</h2>
    <p>Ketika operasi <strong>Bitwise AND</strong> dilakukan pada dua bit, ia mengembalikan 1 hanya jika kedua bit bernilai 1.</p>
    <table>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>0 & 0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0 & 1</td>
            <td>0</td>
        </tr>
        <tr>
            <td>1 & 0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>1 & 1</td>
            <td>1</td>
        </tr>
    </table>

    <h2>Bitwise OR di JavaScript</h2>
    <p>Ketika operasi <strong>Bitwise OR</strong> dilakukan pada dua bit, ia mengembalikan 1 jika salah satu bit bernilai 1.</p>
    <table>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>0 | 0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0 | 1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1 | 0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1 | 1</td>
            <td>1</td>
        </tr>
    </table>

    <h2>Bitwise XOR di JavaScript</h2>
    <p>Ketika operasi <strong>Bitwise XOR</strong> dilakukan pada dua bit, ia mengembalikan 1 jika kedua bit berbeda.</p>
    <table>
        <tr>
            <th>Operasi</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>0 ^ 0</td>
            <td>0</td>
        </tr>
        <tr>
            <td>0 ^ 1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1 ^ 0</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1 ^ 1</td>
            <td>0</td>
        </tr>
    </table>

    <h2>Bitwise NOT di JavaScript</h2>
    <p><strong>Bitwise NOT</strong> membalikkan semua bit.</p>
    <table>
        <tr>
            <th>Decimal</th>
            <th>Biner</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>5</td>
            <td>00000000000000000000000000000101</td>
            <td>-6</td>
        </tr>
        <tr>
            <td>~5</td>
            <td>11111111111111111111111111111010</td>
            <td>-6</td>
        </tr>
    </table>

    <h2>Bitwise Left Shift (<<) di JavaScript</h2>
    <p><strong>Left shift</strong> menggeser bit ke kiri dengan menambahkan nol dari kanan dan membiarkan bit kiri terbuang.</p>
    <table>
        <tr>
            <th>Decimal</th>
            <th>Biner</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>5</td>
            <td>00000000000000000000000000000101</td>
            <td>10</td>
        </tr>
        <tr>
            <td>5 << 1</td>
            <td>00000000000000000000000000001010</td>
            <td>10</td>
        </tr>
    </table>

    <h2>Bitwise Signed Right Shift (>>) di JavaScript</h2>
    <p><strong>Signed right shift</strong> menggeser bit ke kanan dengan menambahkan salinan bit kiri dan membiarkan bit kanan terbuang.</p>
    <table>
        <tr>
            <th>Decimal</th>
            <th>Biner</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>-5</td>
            <td>11111111111111111111111111111011</td>
            <td>-3</td>
        </tr>
        <tr>
            <td>-5 >> 1</td>
            <td>11111111111111111111111111111101</td>
            <td>-3</td>
        </tr>
    </table>

    <h2>Bitwise Zero Fill Right Shift (>>>) di JavaScript</h2>
    <p><strong>Zero fill right shift</strong> menggeser bit ke kanan dengan menambahkan nol dari kiri dan membiarkan bit kanan terbuang.</p>
    <table>
        <tr>
            <th>Decimal</th>
            <th>Biner</th>
            <th>Hasil</th>
        </tr>
        <tr>
            <td>5</td>
            <td>00000000000000000000000000000101</td>
            <td>2</td>
        </tr>
        <tr>
            <td>5 >>> 1</td>
            <td>00000000000000000000000000000010</td>
            <td>2</td>
        </tr>
    </table>

    <h2>Angka Biner</h2>
    <p>Angka biner adalah sistem bilangan yang hanya terdiri dari dua angka: 0 dan 1. Dalam operasi bitwise, kita bekerja langsung dengan angka biner, mengubah dan mengoperasikannya dalam bentuk bit (0 atau 1).</p>
<br>
<a href="#destructuring" class="btn-prev">&larr; Previous</a>
<a href="#regexp" class="btn-next">Next &rarr;</a>        
</section>

<section id="regexp" class="content hidden">
    <h1>Ekspresi Reguler JavaScript</h1>

    <p>Ekspresi reguler adalah urutan karakter yang membentuk pola pencarian. Pola pencarian ini dapat digunakan untuk operasi pencarian teks dan penggantian teks.</p>

    <h2>Apa Itu Ekspresi Reguler?</h2>
    <p>Ekspresi reguler adalah urutan karakter yang membentuk pola pencarian. Ketika Anda mencari data dalam sebuah teks, Anda dapat menggunakan pola pencarian ini untuk mendeskripsikan apa yang Anda cari.</p>
    <p>Ekspresi reguler bisa berupa karakter tunggal, atau pola yang lebih rumit. Ekspresi reguler dapat digunakan untuk melakukan berbagai jenis operasi pencarian dan penggantian teks.</p>

    <h3>Sintaksis</h3>
    <p><code>/pola/modifier;</code></p>
    <p><strong>Contoh:</strong> <code>/w3schools/i;</code></p>

    <h4>Penjelasan contoh:</h4>
    <ul>
        <li><code>/w3schools/i</code> adalah ekspresi reguler.</li>
        <li><code>w3schools</code> adalah pola (untuk digunakan dalam pencarian).</li>
        <li><code>i</code> adalah modifier (memodifikasi pencarian agar tidak sensitif terhadap huruf besar/kecil).</li>
    </ul>

    <h2>Menggunakan Metode String</h2>
    <p>Di JavaScript, ekspresi reguler sering digunakan dengan dua metode string: <code>search()</code> dan <code>replace()</code>.</p>
    
    <h3>Menggunakan <code>search()</code> dengan String</h3>
    <p>Metode <code>search()</code> mencari string untuk nilai yang ditentukan dan mengembalikan posisi kecocokan.</p>

    <h4>Contoh:</h4>
    <pre><code>
    let text = "Visit W3Schools!";
    let n = text.search("W3Schools");
    </code></pre>
    <p>Hasil dari <code>n</code> akan menjadi: <code>6</code></p>

    <h3>Menggunakan <code>search()</code> dengan Ekspresi Reguler</h3>
    <p>Contoh: Menggunakan ekspresi reguler untuk mencari "w3schools" tanpa mempedulikan huruf besar/kecil dalam sebuah string:</p>

    <pre><code>
    let text = "Visit W3Schools";
    let n = text.search(/w3schools/i);
    </code></pre>
    <p>Hasil dari <code>n</code> akan menjadi: <code>6</code></p>

    <h3>Menggunakan <code>replace()</code> dengan String</h3>
    <p>Metode <code>replace()</code> menggantikan nilai yang ditentukan dengan nilai lain dalam sebuah string.</p>
    <pre><code>
    let text = "Visit Microsoft!";
    let result = text.replace("Microsoft", "W3Schools");
    </code></pre>

    <h3>Menggunakan <code>replace()</code> dengan Ekspresi Reguler</h3>
    <p>Contoh: Menggunakan ekspresi reguler tanpa mempedulikan huruf besar/kecil untuk mengganti "Microsoft" dengan "W3Schools" dalam sebuah string:</p>
    <pre><code>
    let text = "Visit Microsoft!";
    let result = text.replace(/microsoft/i, "W3Schools");
    </code></pre>
    <p>Hasil dari <code>result</code> akan menjadi: <code>Visit W3Schools!</code></p>

    <h2>Apa yang Perlu Diketahui?</h2>
    <p>Argumen ekspresi reguler (daripada argumen string) dapat digunakan dalam metode-metode di atas. Ekspresi reguler dapat membuat pencarian Anda jauh lebih kuat (misalnya tidak sensitif terhadap huruf besar/kecil).</p>

    <h2>Modifier Ekspresi Reguler</h2>
    <p>Modifier dapat digunakan untuk melakukan pencarian yang tidak sensitif terhadap huruf besar/kecil atau pencarian global:</p>
    <table>
        <tr>
            <th>Modifier</th>
            <th>Deskripsi</th>
            <th>Coba</th>
        </tr>
        <tr>
            <td><code>i</code></td>
            <td>Melakukan pencocokan yang tidak sensitif terhadap huruf besar/kecil</td>
            <td></td>
        </tr>
        <tr>
            <td><code>g</code></td>
            <td>Melakukan pencocokan global (menemukan semua)</td>
            <td></td>
        </tr>
        <tr>
            <td><code>m</code></td>
            <td>Melakukan pencocokan multiline</td>
            <td></td>
        </tr>
        <tr>
            <td><code>d</code></td>
            <td>Melakukan pencocokan pada awal dan akhir (Baru di ES2022)</td>
            <td></td>
        </tr>
    </table>

    <h2>Pola Ekspresi Reguler</h2>
    <p>Bracket digunakan untuk mencari rentang karakter:</p>
    <table>
        <tr>
            <th>Ekspresi</th>
            <th>Deskripsi</th>
            <th>Coba</th>
        </tr>
        <tr>
            <td><code>[abc]</code></td>
            <td>Mencari salah satu karakter di dalam bracket</td>
            <td></td>
        </tr>
        <tr>
            <td><code>[0-9]</code></td>
            <td>Mencari salah satu digit di dalam bracket</td>
            <td></td>
        </tr>
        <tr>
            <td><code>(x|y)</code></td>
            <td>Mencari salah satu alternatif yang dipisahkan dengan <code>|</code></td>
            <td></td>
        </tr>
    </table>

    <h2>Metakarakter</h2>
    <p>Metakarakter adalah karakter dengan makna khusus:</p>
    <table>
        <tr>
            <th>Metakarakter</th>
            <th>Deskripsi</th>
            <th>Coba</th>
        </tr>
        <tr>
            <td><code>\d</code></td>
            <td>Mencari digit</td>
            <td></td>
        </tr>
        <tr>
            <td><code>\s</code></td>
            <td>Mencari karakter spasi</td>
            <td></td>
        </tr>
        <tr>
            <td><code>\b</code></td>
            <td>Mencari kecocokan di awal kata seperti: <code>\bWORD</code>, atau di akhir kata seperti: <code>WORD\b</code></td>
            <td></td>
        </tr>
        <tr>
            <td><code>\uxxxx</code></td>
            <td>Mencari karakter Unicode yang ditentukan oleh nomor heksadesimal xxxx</td>
            <td></td>
        </tr>
    </table>

    <h2>Kuantifikator untuk Menentukan Jumlah</h2>
    <p>Kuantifikator digunakan untuk menentukan jumlah kemunculan karakter:</p>
    <table>
        <tr>
            <th>Kuantifikator</th>
            <th>Deskripsi</th>
            <th>Coba</th>
        </tr>
        <tr>
            <td><code>n+</code></td>
            <td>Mencocokkan string yang mengandung setidaknya satu <code>n</code></td>
            <td></td>
        </tr>
        <tr>
            <td><code>n*</code></td>
            <td>Mencocokkan string yang mengandung nol atau lebih <code>n</code></td>
            <td></td>
        </tr>
        <tr>
            <td><code>n?</code></td>
            <td>Mencocokkan string yang mengandung nol atau satu <code>n</code></td>
            <td></td>
        </tr>
    </table>

    <h2>Menggunakan Objek RegExp</h2>
    <h3>Menggunakan <code>test()</code></h3>
    <p>Metode <code>test()</code> mencari sebuah pola dalam sebuah string dan mengembalikan <code>true</code> atau <code>false</code>, tergantung pada hasilnya.</p>

    <h4>Contoh:</h4>
    <pre><code>
    const pattern = /e/;
    pattern.test("The best things in life are free!");
    </code></pre>
    <p>Hasil: <code>true</code></p>

    <h3>Menggunakan <code>exec()</code></h3>
    <p>Metode <code>exec()</code> mencari sebuah pola dalam string dan mengembalikan teks yang ditemukan dalam bentuk objek.</p>

    <h4>Contoh:</h4>
    <pre><code>
    /e/.exec("The best things in life are free!");
    </code></pre>
    <p>Metode <code>exec()</code> akan mengembalikan objek yang berisi hasil kecocokan pertama yang ditemukan.</p>

    <br>
    <a href="#bitwise" class="btn-prev">&larr; Previous</a>
    <a href="#precedence" class="btn-next">Next &rarr;</a>
</section>

<section id="precedence" class="content hidden">
        <h2>Penjelasan Mengenai Operator Precedence (Urutan Prioritas Operator) dalam JavaScript</h2>
        <p><strong>Operator Precedence</strong> mendeskripsikan urutan di mana operasi dilakukan dalam sebuah ekspresi aritmatika.</p>
        
        <ul>
            <li><strong>Perkalian (*)</strong> dan <strong>pembagian (/)</strong> memiliki prioritas yang lebih tinggi daripada <strong>penjumlahan (+)</strong> dan <strong>pengurangan (-)</strong>.</li>
            <li>Seperti dalam matematika tradisional, perkalian dilakukan lebih dulu.</li>
        </ul>
    
        <h3>Contoh:</h3>
        <pre><code>let x = 100 + 50 * 3;</code></pre>
        <p>Dalam contoh ini, perkalian dilakukan terlebih dahulu, baru kemudian penjumlahan.</p>
    
        <ul>
            <li>Saat menggunakan tanda kurung, operasi dalam kurung dihitung lebih dulu.</li>
        </ul>
    
        <h3>Contoh:</h3>
        <pre><code>let x = (100 + 50) * 3;</code></pre>
    
        <ul>
            <li>Operasi dengan prioritas yang sama (seperti * dan /) dihitung dari kiri ke kanan.</li>
        </ul>
    
        <h3>Contoh:</h3>
        <pre><code>let x = 100 / 50 * 3;</code></pre>
    
        <hr>
    
        <h3>Nilai Prioritas Operator</h3>
        <p>Ekspresi dalam tanda kurung dihitung sebelum ekspresi lainnya. Fungsi dieksekusi sebelum hasilnya digunakan dalam ekspresi lainnya.</p>
    
        <table>
            <thead>
                <tr>
                    <th>Nilai</th>
                    <th>Operator</th>
                    <th>Deskripsi</th>
                    <th>Contoh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>18</td>
                    <td>( )</td>
                    <td>Pengelompokan Ekspresi</td>
                    <td>(100 + 50) * 3</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>.</td>
                    <td>Anggota Objek</td>
                    <td>person.name</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>[]</td>
                    <td>Anggota Array</td>
                    <td>person["name"]</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>?.</td>
                    <td>Optional Chaining (ES2020)</td>
                    <td>x ?. y</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>()</td>
                    <td>Panggilan Fungsi</td>
                    <td>myFunction()</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>new</td>
                    <td>Pembuat Objek Baru dengan Argumen</td>
                    <td>new Date("June 5, 2022")</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>new</td>
                    <td>Pembuat Objek Baru tanpa Argumen</td>
                    <td>new Date()</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Operator Inkrement</h3>
        <p>Inkrement postfix dieksekusi sebelum prefix.</p>
    
        <table>
            <thead>
                <tr>
                    <th>Nilai</th>
                    <th>Operator</th>
                    <th>Deskripsi</th>
                    <th>Contoh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>15</td>
                    <td>++</td>
                    <td>Inkrement Postfix</td>
                    <td>i++</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>--</td>
                    <td>Dekrement Postfix</td>
                    <td>i--</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>++</td>
                    <td>Inkrement Prefix</td>
                    <td>++i</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>--</td>
                    <td>Dekrement Prefix</td>
                    <td>--i</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Operator NOT</h3>
        <p>Operasi NOT dilakukan pada nilai yang diberikan.</p>
    
        <table>
            <thead>
                <tr>
                    <th>Nilai</th>
                    <th>Operator</th>
                    <th>Deskripsi</th>
                    <th>Contoh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>14</td>
                    <td>!</td>
                    <td>Logical NOT</td>
                    <td>!(x == y)</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>~</td>
                    <td>Bitwise NOT</td>
                    <td>~x</td>
                </tr>
            </tbody>
        </table>
    
        <h3>Operator Uniter</h3>
        <p>Operator uniter digunakan untuk operasi satu nilai (unary).</p>
    
        <table>
            <thead>
                <tr>
                    <th>Nilai</th>
                    <th>Operator</th>
                    <th>Deskripsi</th>
                    <th>Contoh</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>14</td>
                    <td>+</td>
                    <td>Unary Plus</td>
                    <td>+x</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>-</td>
                    <td>Unary Minus</td>
                    <td>-x</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>typeof</td>
                    <td>Mengetahui Tipe Data</td>
                    <td>typeof x</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>void</td>
                    <td>Evaluasi Void</td>
                    <td>void(0)</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>delete</td>
                    <td>Hapus Properti</td>
                    <td>delete myCar.color</td>
                </tr>
            </tbody>
        </table>
    
        <!-- Add other sections here similar to the above ones -->
    
        <hr>
    
        <p>Dengan tabel di atas, kita bisa memahami urutan operator di JavaScript dan bagaimana mereka dieksekusi dalam ekspresi.</p>
    <br>
    <a href="#regexp" class="btn-prev">&larr; Previous</a>
    <a href="#scope" class="btn-next">Next &rarr;</a>
</section>



<section id="scope" class="content hidden">
    <h1>Scope JavaScript</h1>

    <p>Scope menentukan aksesibilitas (visibilitas) dari variabel.</p>
    <p>JavaScript memiliki 3 jenis scope variabel:</p>
    <ul>
        <li><strong>Block Scope</strong></li>
        <li><strong>Function Scope</strong></li>
        <li><strong>Global Scope</strong></li>
    </ul>

    <h2>Block Scope</h2>
    <p>Sebelum ES6 (2015), JavaScript hanya memiliki <strong>Global Scope</strong> dan <strong>Function Scope</strong>.</p>
    <p>ES6 memperkenalkan dua kata kunci JavaScript yang penting: <code>let</code> dan <code>const</code>.</p>
    <p>Kedua kata kunci ini menyediakan <strong>Block Scope</strong> dalam JavaScript.</p>
    <p>Variabel yang dideklarasikan di dalam blok <code>{ }</code> tidak dapat diakses dari luar blok tersebut:</p>
    <pre><code>
{
  let x = 2;
}
// x TIDAK bisa digunakan di sini
    </code></pre>

    <p>Variabel yang dideklarasikan dengan kata kunci <code>var</code> TIDAK memiliki <strong>block scope</strong>.</p>
    <p>Variabel yang dideklarasikan di dalam blok <code>{ }</code> masih bisa diakses dari luar blok tersebut:</p>
    <pre><code>
{
  var x = 2;
}
// x BISA digunakan di sini
    </code></pre>

    <h2>Local Scope</h2>
    <p>Variabel yang dideklarasikan di dalam sebuah fungsi JavaScript, bersifat <strong>LOCAL</strong> untuk fungsi tersebut:</p>
    <pre><code>
// kode di sini TIDAK bisa menggunakan carName

function myFunction() {
  let carName = "Volvo";
  // kode di sini BISA menggunakan carName
}

// kode di sini TIDAK bisa menggunakan carName
    </code></pre>

    <p>Variabel lokal memiliki <strong>Function Scope</strong>:</p>
    <ul>
        <li>Variabel lokal hanya bisa diakses di dalam fungsi tersebut.</li>
        <li>Variabel dengan nama yang sama dapat digunakan di fungsi yang berbeda.</li>
        <li>Variabel lokal dibuat ketika fungsi dimulai dan dihapus ketika fungsi selesai.</li>
    </ul>

    <h2>Function Scope</h2>
    <p>JavaScript memiliki <strong>function scope</strong>: Setiap fungsi menciptakan scope baru.</p>
    <p>Variabel yang dideklarasikan di dalam sebuah fungsi tidak dapat diakses (terlihat) dari luar fungsi tersebut.</p>
    <p>Variabel yang dideklarasikan dengan <code>var</code>, <code>let</code>, dan <code>const</code> memiliki <strong>Function Scope</strong> saat dideklarasikan di dalam fungsi.</p>
    <pre><code>
function myFunction() {
  var carName = "Volvo";   // Function Scope
}
function myFunction() {
  let carName = "Volvo";   // Function Scope
}
function myFunction() {
  const carName = "Volvo";   // Function Scope
}
    </code></pre>

    <h2>Variabel Global JavaScript</h2>
    <p>Variabel yang dideklarasikan di luar fungsi, menjadi <strong>GLOBAL</strong>.</p>
    <pre><code>
let carName = "Volvo";
// kode di sini bisa menggunakan carName

function myFunction() {
  // kode di sini juga bisa menggunakan carName
}
    </code></pre>

    <p>Variabel global memiliki <strong>Global Scope</strong>: Semua script dan fungsi di halaman web dapat mengaksesnya.</p>

    <h2>Global Scope</h2>
    <p>Variabel yang dideklarasikan secara global (di luar fungsi) memiliki <strong>Global Scope</strong>.</p>
    <p>Variabel global bisa diakses dari mana saja dalam program JavaScript.</p>
    <p>Variabel yang dideklarasikan dengan <code>var</code>, <code>let</code>, dan <code>const</code> serupa jika dideklarasikan di luar blok.</p>
    <pre><code>
var x = 2;       // Global scope
let x = 2;       // Global scope
const x = 2;     // Global scope
    </code></pre>

    <h2>Variabel JavaScript</h2>
    <p>Dalam JavaScript, objek dan fungsi juga merupakan variabel.</p>
    <p>Scope menentukan aksesibilitas variabel, objek, dan fungsi dari bagian kode yang berbeda.</p>

    <h2>Secara Otomatis Global</h2>
    <p>Jika Anda memberikan nilai kepada variabel yang belum dideklarasikan, variabel tersebut akan otomatis menjadi variabel <strong>GLOBAL</strong>.</p>
    <pre><code>
myFunction();

// kode di sini bisa menggunakan carName

function myFunction() {
  carName = "Volvo";
}
    </code></pre>

    <h2>Strict Mode</h2>
    <p>Semua browser modern mendukung menjalankan JavaScript dalam "Strict Mode".</p>
    <p>Anda akan belajar lebih lanjut tentang cara menggunakan strict mode pada bab tutorial yang akan datang.</p>
    <p>Dalam "Strict Mode", variabel yang tidak dideklarasikan tidak akan otomatis menjadi global.</p>

    <h2>Variabel Global dalam HTML</h2>
    <p>Dengan JavaScript, scope global adalah lingkungan JavaScript itu sendiri.</p>
    <p>Di dalam HTML, scope global adalah objek <code>window</code>.</p>
    <p>Variabel global yang dideklarasikan dengan kata kunci <code>var</code> menjadi bagian dari objek <code>window</code>:</p>
    <pre><code>
var carName = "Volvo";
// kode di sini bisa menggunakan window.carName
    </code></pre>

    <p>Variabel global yang dideklarasikan dengan kata kunci <code>let</code> tidak menjadi bagian dari objek <code>window</code>:</p>
    <pre><code>
let carName = "Volvo";
// kode di sini tidak bisa menggunakan window.carName
    </code></pre>

    <br>
    <a href="#errors" class="btn-prev">&larr; Previous</a>
    <a href="#hoisting" class="btn-next">Next &rarr;</a>
</section>

<section id="hoisting" class="content hidden">
    <h1>Hoisting JavaScript</h1>

    <p>Hoisting adalah perilaku default JavaScript yang memindahkan deklarasi ke bagian atas.</p>

    <h2>Deklarasi JavaScript Dihosikan</h2>
    <p>Dalam JavaScript, sebuah variabel dapat dideklarasikan setelah digunakan.</p>
    <p>Dengan kata lain, sebuah variabel dapat digunakan sebelum dideklarasikan.</p>

    <p>Contoh 1 menghasilkan hasil yang sama dengan Contoh 2:</p>
    
    <h3>Contoh 1</h3>
    <pre><code>
    x = 5; // Menugaskan nilai 5 ke x
    elem = document.getElementById("demo"); // Mencari elemen
    elem.innerHTML = x; // Menampilkan x dalam elemen
    var x; // Mendeklarasikan x
    </code></pre>

    <h3>Contoh 2</h3>
    <pre><code>
    var x; // Mendeklarasikan x
    x = 5; // Menugaskan nilai 5 ke x
    elem = document.getElementById("demo"); // Mencari elemen
    elem.innerHTML = x; // Menampilkan x dalam elemen
    </code></pre>

    <p>Untuk memahami ini, Anda perlu memahami istilah "hoisting".</p>
    <p>Hoisting adalah perilaku default JavaScript yang memindahkan semua deklarasi ke bagian atas scope saat ini (ke bagian atas skrip saat ini atau fungsi saat ini).</p>

    <h2>Kata Kunci let dan const</h2>
    <p>Variabel yang didefinisikan dengan <code>let</code> dan <code>const</code> juga dihoist ke bagian atas blok, namun tidak diinisialisasi.</p>
    <p>Artinya: Blok kode tersebut mengetahui keberadaan variabel, tetapi variabel tersebut tidak dapat digunakan sampai dideklarasikan.</p>
    <p>Menggunakan variabel <code>let</code> sebelum dideklarasikan akan menghasilkan <code>ReferenceError</code>.</p>
    <p>Variabel tersebut berada dalam "temporal dead zone" dari awal blok hingga variabel tersebut dideklarasikan:</p>
    
    <h3>Contoh</h3>
    <pre><code>
    carName = "Volvo";
    let carName;
    </code></pre>
    <p>Ini akan menghasilkan <code>ReferenceError</code>.</p>

    <p>Menggunakan variabel <code>const</code> sebelum dideklarasikan adalah kesalahan sintaksis, jadi kode tersebut tidak akan dijalankan.</p>

    <h3>Contoh</h3>
    <pre><code>
    carName = "Volvo";
    const carName;
    </code></pre>
    <p>Kode ini tidak akan dijalankan.</p>

    <h2>Inisialisasi JavaScript Tidak Dihosikan</h2>
    <p>JavaScript hanya menghoist deklarasi, bukan inisialisasi.</p>
    <p>Contoh 1 tidak memberikan hasil yang sama dengan Contoh 2:</p>
    
    <h3>Contoh 1</h3>
    <pre><code>
    var x = 5; // Inisialisasi x
    var y = 7; // Inisialisasi y
    elem = document.getElementById("demo"); // Mencari elemen
    elem.innerHTML = x + " " + y; // Menampilkan x dan y
    </code></pre>

    <h3>Contoh 2</h3>
    <pre><code>
    var x = 5; // Inisialisasi x
    elem = document.getElementById("demo"); // Mencari elemen
    elem.innerHTML = x + " " + y; // Menampilkan x dan y
    var y = 7; // Inisialisasi y
    </code></pre>

    <p>Apakah masuk akal jika y undefined dalam contoh terakhir?</p>
    <p>Ini karena hanya deklarasi (<code>var y</code>), bukan inisialisasi (<code>= 7</code>), yang dihoist ke atas.</p>
    <p>Karena hoisting, y telah dideklarasikan sebelum digunakan, tetapi karena inisialisasi tidak dihoist, nilai y menjadi <code>undefined</code>.</p>

    <h3>Contoh</h3>
    <pre><code>
    var x = 5; // Inisialisasi x
    var y;     // Deklarasi y
    elem = document.getElementById("demo"); // Mencari elemen
    elem.innerHTML = x + " " + y; // Menampilkan x dan y
    y = 7;    // Menugaskan nilai 7 ke y
    </code></pre>

    <br>
    <a href="#scope" class="btn-prev">&larr; Previous</a>
    <a href="#strict-mode" class="btn-next">Next &rarr;</a>
</section>

<section id="strict-mode" class="content hidden">
    <h1>"use strict" dalam JavaScript</h1>

    <p>`"use strict";` mendefinisikan bahwa kode JavaScript harus dijalankan dalam "mode ketat" (strict mode).</p>

    <h2>Direktif "use strict"</h2>
    <p>Direktif `"use strict"` diperkenalkan pada versi ECMAScript 5.</p>
    <p>Ini bukanlah sebuah pernyataan, melainkan ekspresi literal yang diabaikan oleh versi JavaScript sebelumnya.</p>
    <p>Tujuan dari `"use strict"` adalah untuk menunjukkan bahwa kode harus dijalankan dalam "mode ketat".</p>
    <p>Dengan mode ketat, Anda tidak bisa, misalnya, menggunakan variabel yang tidak dideklarasikan.</p>
    <p>Semua browser modern mendukung `"use strict"`, kecuali Internet Explorer 9 dan versi yang lebih rendah:</p>
    <table>
        <tr>
            <th>Direktif</th>
            <th>Chrome</th>
            <th>Firefox</th>
            <th>Safari</th>
            <th>Edge</th>
            <th>IE</th>
        </tr>
        <tr>
            <td>"use strict"</td>
            <td>13.0</td>
            <td>10.0</td>
            <td>4.0</td>
            <td>6.0</td>
            <td>12.1</td>
        </tr>
    </table>

    <h2>Mendeklarasikan Mode Ketat</h2>
    <p>Mode ketat dideklarasikan dengan menambahkan `"use strict";` di awal sebuah skrip atau fungsi.</p>

    <p>Jika dideklarasikan di awal skrip, maka seluruh kode dalam skrip tersebut akan dijalankan dalam mode ketat:</p>
    <pre><code>
    "use strict";
    x = 3.14;       // Ini akan menyebabkan kesalahan karena x tidak dideklarasikan
    </code></pre>

    <p>Jika dideklarasikan di dalam sebuah fungsi, mode ketat hanya berlaku pada kode di dalam fungsi tersebut:</p>
    <pre><code>
    x = 3.14;       // Ini tidak akan menyebabkan kesalahan.
    myFunction();

    function myFunction() {
      "use strict";
      y = 3.14;   // Ini akan menyebabkan kesalahan
    }
    </code></pre>

    <h2>Sintaks "use strict";</h2>
    <p>Sintaks untuk mendeklarasikan mode ketat dirancang agar kompatibel dengan versi JavaScript yang lebih lama.</p>
    <p>Menyusun literal numerik (4 + 5;) atau literal string ("John Doe";) dalam program JavaScript tidak akan menimbulkan efek samping. Itu hanya akan disusun menjadi variabel yang tidak ada dan berhenti.</p>
    <p>Jadi, `"use strict";` hanya penting bagi kompilator baru yang "memahami" artinya.</p>

    <h2>Mengapa Mode Ketat?</h2>
    <p>Mode ketat mempermudah penulisan JavaScript yang lebih "aman".</p>
    <p>Mode ketat mengubah "sintaks buruk" yang sebelumnya diterima menjadi kesalahan nyata.</p>
    <p>Sebagai contoh, dalam JavaScript biasa, salah mengetikkan nama variabel akan membuat variabel global baru. Dalam mode ketat, ini akan menimbulkan kesalahan, sehingga tidak mungkin membuat variabel global secara tidak sengaja.</p>
    <p>Dalam JavaScript biasa, pengembang tidak akan mendapatkan umpan balik kesalahan saat memberikan nilai pada properti yang tidak dapat ditulis.</p>
    <p>Dalam mode ketat, setiap penugasan pada properti yang tidak dapat ditulis, properti hanya getter, properti yang tidak ada, variabel yang tidak ada, atau objek yang tidak ada, akan menimbulkan kesalahan.</p>

    <h2>Tidak Diizinkan dalam Mode Ketat</h2>
    <ol>
        <li>Menggunakan variabel tanpa mendeklarasikannya tidak diperbolehkan:
            <pre><code>
            "use strict";
            x = 3.14;                // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Objek juga dianggap variabel. Menggunakan objek tanpa mendeklarasikannya tidak diperbolehkan:
            <pre><code>
            "use strict";
            x = {p1:10, p2:20};      // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Menghapus variabel (atau objek) tidak diperbolehkan:
            <pre><code>
            "use strict";
            let x = 3.14;
            delete x;                // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Menghapus fungsi tidak diperbolehkan:
            <pre><code>
            "use strict";
            function x(p1, p2) {};
            delete x;                // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Duplikasi nama parameter tidak diperbolehkan:
            <pre><code>
            "use strict";
            function x(p1, p1) {};   // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Literals numerik oktal tidak diperbolehkan:
            <pre><code>
            "use strict";
            let x = 010;             // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Karakter escape oktal tidak diperbolehkan:
            <pre><code>
            "use strict";
            let x = "\010";           // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Menulis pada properti hanya baca tidak diperbolehkan:
            <pre><code>
            "use strict";
            const obj = {};
            Object.defineProperty(obj, "x", {value:0, writable:false});

            obj.x = 3.14;            // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Menulis pada properti getter-only tidak diperbolehkan:
            <pre><code>
            "use strict";
            const obj = {get x() {return 0} };

            obj.x = 3.14;            // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Menghapus properti yang tidak dapat dihapus tidak diperbolehkan:
            <pre><code>
            "use strict";
            delete Object.prototype; // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Kata `eval` tidak dapat digunakan sebagai nama variabel:
            <pre><code>
            "use strict";
            let eval = 3.14;         // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Kata `arguments` tidak dapat digunakan sebagai nama variabel:
            <pre><code>
            "use strict";
            let arguments = 3.14;    // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
        <li>Pernyataan `with` tidak diperbolehkan:
            <pre><code>
            "use strict";
            with (Math){x = cos(2)}; // Ini akan menyebabkan kesalahan
            </code></pre>
        </li>
    </ol>

    <h2>Menjaga Keamanan di Masa Depan!</h2>
    <p>Kata kunci yang disediakan untuk versi JavaScript di masa depan tidak dapat digunakan sebagai nama variabel dalam mode ketat.</p>
    <p>Kata kunci yang dilarang adalah:</p>
    <ul>
        <li>implements</li>
        <li>interface</li>
        <li>let</li>
        <li>package</li>
        <li>private</li>
        <li>protected</li>
        <li>public</li>
        <li>static</li>
        <li>yield</li>
    </ul>

    <pre><code>
    "use strict";
    let public = 1500;      // Ini akan menyebabkan kesalahan
    </code></pre>

    <br>
    <a href="#hoisting" class="btn-prev">&larr; Previous</a>
    <a href="#this-keyword" class="btn-next">Next &rarr;</a>        
</section>

<section id="this-keyword" class="content hidden">
    <h1>Keyword `this` dalam JavaScript</h1>

    <p>Keyword <code>this</code> dalam JavaScript merujuk pada sebuah objek dan dapat mengacu pada objek yang berbeda tergantung pada konteks penggunaannya.</p>

    <h2>Contoh</h2>
    <pre><code>
    const person = {
      firstName: "John",
      lastName : "Doe",
      id       : 5566,
      fullName : function() {
        return this.firstName + " " + this.lastName;
      }
    };
    </code></pre>

    <h2>Apa itu `this`?</h2>
    <p>Dalam JavaScript, keyword <code>this</code> merujuk pada sebuah objek dan mengacu pada objek yang berbeda tergantung pada bagaimana ia digunakan:</p>
    <ul>
        <li><strong>Dalam metode objek</strong>, <code>this</code> mengacu pada objek tempat metode tersebut dipanggil.</li>
        <li><strong>Sendiri</strong>, <code>this</code> mengacu pada objek global.</li>
        <li><strong>Dalam sebuah fungsi</strong>, <code>this</code> mengacu pada objek global.</li>
        <li><strong>Dalam sebuah fungsi dengan strict mode</strong>, <code>this</code> adalah <code>undefined</code>.</li>
        <li><strong>Dalam event handler</strong>, <code>this</code> mengacu pada elemen HTML yang menerima event tersebut.</li>
        <li>Metode seperti <code>call()</code>, <code>apply()</code>, dan <code>bind()</code> dapat mengarahkan <code>this</code> ke objek lain.</li>
    </ul>

    <p><strong>Catatan:</strong> <code>this</code> bukanlah sebuah variabel, melainkan sebuah keyword, dan Anda tidak bisa mengubah nilai dari <code>this</code>.</p>

    <h2>`this` dalam Metode Objek</h2>
    <p>Ketika digunakan dalam metode objek, <code>this</code> mengacu pada objek yang memanggil metode tersebut. Pada contoh di atas, <code>this</code> mengacu pada objek <code>person</code>.</p>
    <pre><code>
    fullName: function() {
      return this.firstName + " " + this.lastName;
    }
    </code></pre>

    <h2>`this` Sendiri</h2>
    <p>Ketika <code>this</code> digunakan sendiri, ia mengacu pada objek global. Di browser, objek global adalah <code>window</code>.</p>
    <pre><code>
    let x = this;
    </code></pre>

    <p>Dalam strict mode, meskipun <code>this</code> digunakan sendiri, <code>this</code> tetap mengacu pada objek global:</p>
    <pre><code>
    "use strict";
    let x = this;  // 'this' mengacu pada objek global
    </code></pre>

    <h2>`this` dalam Fungsi (Default)</h2>
    <p>Dalam sebuah fungsi, objek global adalah binding default untuk <code>this</code>. Di browser, objek global adalah <code>window</code>.</p>
    <pre><code>
    function myFunction() {
      return this;
    }
    </code></pre>

    <h2>`this` dalam Fungsi (Strict Mode)</h2>
    <p>Mode strict JavaScript tidak membolehkan binding default, sehingga ketika digunakan dalam fungsi dalam strict mode, <code>this</code> akan menjadi <code>undefined</code>.</p>
    <pre><code>
    "use strict";
    function myFunction() {
      return this;  // 'this' akan menjadi undefined
    }
    </code></pre>

    <h2>`this` dalam Event Handlers</h2>
    <p>Dalam event handler HTML, <code>this</code> mengacu pada elemen HTML yang menerima event tersebut. Sebagai contoh:</p>
    <pre><code>
    &lt;button onclick="this.style.display='none'">
      Klik untuk Menghapus Saya!
    &lt;/button>
    </code></pre>

    <h2>Pengikatan Metode Objek</h2>
    <p>Dalam contoh berikut, <code>this</code> mengacu pada objek <code>person</code>:</p>
    <pre><code>
    const person = {
      firstName  : "John",
      lastName   : "Doe",
      id         : 5566,
      myFunction : function() {
        return this;  // 'this' mengacu pada objek person
      }
    };
    </code></pre>

    <h2>Pengikatan Eksplisit Fungsi</h2>
    <p>Metode <code>call()</code>, <code>apply()</code>, dan <code>bind()</code> memungkinkan Anda untuk memanggil metode objek dengan objek lain sebagai argumen, sehingga <code>this</code> mengacu pada objek baru.</p>
    <pre><code>
    const person1 = {
      fullName: function() {
        return this.firstName + " " + this.lastName;
      }
    }

    const person2 = {
      firstName: "John",
      lastName: "Doe",
    }

    // Menggunakan call() untuk memanggil fullName dari person1 dengan person2 sebagai argumennya:
    person1.fullName.call(person2);  // Mengembalikan "John Doe"
    </code></pre>

    <h2>Peminjaman Fungsi</h2>
    <p>Dengan metode <code>bind()</code>, sebuah objek dapat meminjam metode dari objek lain. Berikut contoh peminjaman metode <code>fullName</code> dari objek <code>person</code> ke objek <code>member</code>:</p>
    <pre><code>
    const person = {
      firstName: "John",
      lastName: "Doe",
      fullName: function () {
        return this.firstName + " " + this.lastName;
      }
    }

    const member = {
      firstName: "Hege",
      lastName: "Nilsen",
    }

    let fullName = person.fullName.bind(member);  // 'member' meminjam metode fullName dari 'person'
    </code></pre>

    <h2>Precedence (Urutan Prioritas)</h2>
    <p>Berikut adalah urutan prioritas untuk menentukan objek mana yang dirujuk oleh <code>this</code>:</p>
    <ol>
        <li><strong><code>bind()</code></strong> - Mengikatkan <code>this</code> ke objek tertentu.</li>
        <li><strong><code>apply()</code> dan <code>call()</code></strong> - Mengubah <code>this</code> ke objek baru dengan memanggil metode objek dengan objek lain sebagai argumen.</li>
        <li><strong>Metode Objek</strong> - Jika <code>this</code> digunakan dalam sebuah metode objek, ia mengacu pada objek yang memanggil metode tersebut.</li>
        <li><strong>Global Scope</strong> - Jika <code>this</code> digunakan di luar objek atau fungsi, maka <code>this</code> mengacu pada objek global.</li>
    </ol>

    <br>
    <a href="#strict-mode" class="btn-prev">&larr; Previous</a>
    <a href="#arrow-function" class="btn-next">Next &rarr;</a>
</section>

<section id="arrow-function" class="content hidden">
    <h1>Arrow Function dalam JavaScript</h1>

    <p>Arrow functions diperkenalkan pada ES6. Arrow functions memungkinkan kita untuk menulis sintaksis fungsi yang lebih ringkas.</p>

    <h2>Sebelum dan Setelah Menggunakan Arrow Function</h2>
    <p>Berikut adalah contoh cara mendefinisikan fungsi sebelum dan setelah menggunakan arrow function:</p>

    <p><strong>Sebelum Arrow Function:</strong></p>
    <pre><code>
    hello = function() {
      return "Hello World!";
    }
    </code></pre>

    <p><strong>Dengan Arrow Function:</strong></p>
    <pre><code>
    hello = () => {
      return "Hello World!";
    }
    </code></pre>

    <p>Lebih singkat! Jika fungsi hanya memiliki satu pernyataan dan pernyataan tersebut mengembalikan sebuah nilai, Anda bisa menghapus tanda kurung dan kata kunci <code>return</code>:</p>

    <p><strong>Arrow Function Mengembalikan Nilai Secara Default:</strong></p>
    <pre><code>
    hello = () => "Hello World!";
    </code></pre>

    <p>Catatan: Ini hanya berlaku jika fungsi memiliki satu pernyataan saja.</p>

    <h2>Arrow Function dengan Parameter</h2>
    <p>Jika Anda memiliki parameter, Anda bisa memasukannya di dalam tanda kurung:</p>
    <pre><code>
    hello = (val) => "Hello " + val;
    </code></pre>

    <p>Sebenarnya, jika Anda hanya memiliki satu parameter, Anda juga bisa melewatkan tanda kurung:</p>
    <pre><code>
    hello = val => "Hello " + val;
    </code></pre>

    <h2>Apa yang Terjadi dengan <code>this</code>?</h2>
    <p>Penanganan <code>this</code> juga berbeda pada arrow function dibandingkan dengan fungsi biasa.</p>

    <p>Secara singkat, dengan arrow function, tidak ada ikatan untuk <code>this</code>.</p>

    <p>Pada fungsi biasa, keyword <code>this</code> mewakili objek yang memanggil fungsi, yang bisa saja objek <code>window</code>, <code>document</code>, tombol, atau lainnya.</p>

    <p>Dengan arrow function, keyword <code>this</code> selalu mewakili objek yang mendefinisikan arrow function tersebut.</p>

    <h3>Contoh:</h3>
    <p>Kedua contoh berikut memanggil metode yang sama dua kali, pertama saat halaman dimuat, dan kedua saat pengguna mengklik tombol.</p>

    <p>Contoh pertama menggunakan fungsi biasa, dan contoh kedua menggunakan arrow function.</p>

    <h4>Contoh dengan Fungsi Biasa:</h4>
    <pre><code>
    // Fungsi Biasa:
    hello = function() {
      document.getElementById("demo").innerHTML += this;
    }

    // Objek window memanggil fungsi:
    window.addEventListener("load", hello);

    // Objek button memanggil fungsi:
    document.getElementById("btn").addEventListener("click", hello);
    </code></pre>

    <p>Hasilnya menunjukkan bahwa contoh pertama mengembalikan dua objek berbeda (window dan button).</p>

    <h4>Contoh dengan Arrow Function:</h4>
    <pre><code>
    // Arrow Function:
    hello = () => {
      document.getElementById("demo").innerHTML += this;
    }

    // Objek window memanggil fungsi:
    window.addEventListener("load", hello);

    // Objek button memanggil fungsi:
    document.getElementById("btn").addEventListener("click", hello);
    </code></pre>

    <p>Hasilnya menunjukkan bahwa contoh kedua selalu mengembalikan objek window dua kali, karena objek window adalah "pemilik" dari fungsi tersebut.</p>

    <br>
    <a href="#this-keyword" class="btn-prev">&larr; Previous</a>
    <a href="#classes" class="btn-next">Next &rarr;</a>
</section>

<section id="classes" class="content hidden">
    <h1>Classes dalam JavaScript</h1>

    <p>ECMAScript 2015, yang juga dikenal sebagai ES6, memperkenalkan <strong>JavaScript Classes</strong>.</p>
    
    <p>JavaScript Classes adalah template untuk objek-objek JavaScript.</p>

    <h2>Sintaksis JavaScript Class</h2>
    <p>Gunakan kata kunci <code>class</code> untuk membuat sebuah class.</p>
    <p>Selalu tambahkan metode bernama <code>constructor()</code>:</p>

    <pre><code>
    class NamaClass {
      constructor() { ... }
    }
    </code></pre>

    <h3>Contoh:</h3>
    <pre><code>
    class Mobil {
      constructor(nama, tahun) {
        this.nama = nama;
        this.tahun = tahun;
      }
    }
    </code></pre>

    <p>Contoh di atas membuat sebuah class bernama <code>Mobil</code>.</p>
    <p>Class tersebut memiliki dua properti awal: <code>nama</code> dan <code>tahun</code>.</p>
    
    <p>Perlu dicatat bahwa sebuah class JavaScript bukanlah objek itu sendiri.</p>
    <p>Class adalah template untuk objek JavaScript.</p>

    <h2>Menggunakan Class</h2>
    <p>Setelah Anda memiliki sebuah class, Anda bisa menggunakan class tersebut untuk membuat objek:</p>

    <pre><code>
    const mobilSaya1 = new Mobil("Ford", 2014);
    const mobilSaya2 = new Mobil("Audi", 2019);
    </code></pre>

    <p>Contoh di atas menggunakan class <code>Mobil</code> untuk membuat dua objek <code>Mobil</code>.</p>
    <p>Metode <code>constructor</code> dipanggil secara otomatis ketika objek baru dibuat.</p>

    <h2>Metode Constructor</h2>
    <p>Metode <code>constructor</code> adalah metode khusus:</p>
    <ul>
        <li>Harus memiliki nama yang persis <code>constructor</code></li>
        <li>Dieksekusi secara otomatis saat objek baru dibuat</li>
        <li>Digunakan untuk menginisialisasi properti objek</li>
    </ul>
    <p>Jika Anda tidak mendefinisikan metode <code>constructor</code>, JavaScript akan menambahkan metode <code>constructor</code> kosong secara otomatis.</p>

    <h2>Metode dalam Class</h2>
    <p>Metode dalam class dibuat dengan sintaksis yang sama seperti metode objek.</p>
    <p>Gunakan kata kunci <code>class</code> untuk membuat class.</p>
    <p>Selalu tambahkan metode <code>constructor()</code>.</p>
    <p>Kemudian tambahkan metode-metode lain sesuai kebutuhan.</p>

    <pre><code>
    class NamaClass {
      constructor() { ... }
      metode_1() { ... }
      metode_2() { ... }
      metode_3() { ... }
    }
    </code></pre>

    <h2>Membuat Metode Class untuk Menghitung Umur</h2>
    <p>Contoh berikut membuat metode <code>age</code> untuk menghitung umur mobil berdasarkan tahun:</p>

    <pre><code>
    class Mobil {
      constructor(nama, tahun) {
        this.nama = nama;
        this.tahun = tahun;
      }
      age() {
        const tanggal = new Date();
        return tanggal.getFullYear() - this.tahun;
      }
    }

    const mobilSaya = new Mobil("Ford", 2014);
    document.getElementById("demo").innerHTML =
      "Mobil saya berumur " + mobilSaya.age() + " tahun.";
    </code></pre>

    <p>Anda juga bisa mengirim parameter ke metode dalam class:</p>

    <pre><code>
    class Mobil {
      constructor(nama, tahun) {
        this.nama = nama;
        this.tahun = tahun;
      }
      age(x) {
        return x - this.tahun;
      }
    }

    const tanggal = new Date();
    let tahun = tanggal.getFullYear();

    const mobilSaya = new Mobil("Ford", 2014);
    document.getElementById("demo").innerHTML =
      "Mobil saya berumur " + mobilSaya.age(tahun) + " tahun.";
    </code></pre>

    <br>
    <a href="#arrow-function" class="btn-prev">&larr; Previous</a>
    <a href="#modules" class="btn-next">Next &rarr;</a>
</section>

<section id="modules" class="content hidden">
    <h1>Modules dalam JavaScript</h1>

    <p>Modules dalam JavaScript memungkinkan Anda untuk membagi kode menjadi beberapa file terpisah.</p>
    <p>Ini membuat kode lebih mudah untuk dipelihara.</p>
    <p>Modules diimpor dari file eksternal dengan pernyataan <code>import</code>.</p>
    <p>Modules juga bergantung pada atribut <code>type="module"</code> di dalam tag <code>&lt;script&gt;</code>.</p>

    <h2>Contoh</h2>
    <pre><code>
    <script type="module">
      import message from "./message.js";
    </script>
    </code></pre>

    <h2>Export</h2>
    <p>Modules yang berisi fungsi atau variabel dapat disimpan dalam file eksternal.</p>
    <p>Ada dua jenis ekspor: <strong>Named Exports</strong> dan <strong>Default Exports</strong>.</p>

    <h3>Named Exports</h3>
    <p>Untuk membuat <code>named exports</code>, kita dapat membuat file bernama <code>person.js</code> dan mengisinya dengan hal-hal yang ingin kita ekspor.</p>
    <p>Anda dapat membuat <code>named exports</code> dengan dua cara. Secara langsung di dalam baris, atau sekaligus di bagian bawah file.</p>

    <h4>Ekspor Secara Langsung</h4>
    <pre><code>
    // person.js
    export const name = "Jesse";
    export const age = 40;
    </code></pre>

    <h4>Ekspor Sekaligus di Bagian Bawah</h4>
    <pre><code>
    // person.js
    const name = "Jesse";
    const age = 40;

    export { name, age };
    </code></pre>

    <h3>Default Exports</h3>
    <p>Untuk <code>default export</code>, kita bisa membuat file lain, misalnya <code>message.js</code>, dan mendemonstrasikan <code>default export</code>.</p>
    <p>Hanya boleh ada satu <code>default export</code> dalam satu file.</p>

    <h4>Contoh:</h4>
    <pre><code>
    // message.js
    const message = () => {
      const name = "Jesse";
      const age = 40;
      return name + ' is ' + age + ' years old.';
    };

    export default message;
    </code></pre>

    <h2>Import</h2>
    <p>Anda dapat mengimpor modules ke dalam file dengan dua cara, tergantung apakah mereka adalah <strong>named exports</strong> atau <strong>default exports</strong>.</p>

    <h3>Import dari Named Exports</h3>
    <p>Untuk mengimpor <code>named exports</code> dari file <code>person.js</code>:</p>
    <pre><code>
    import { name, age } from "./person.js";
    </code></pre>

    <h3>Import dari Default Exports</h3>
    <p>Untuk mengimpor <code>default export</code> dari file <code>message.js</code>:</p>
    <pre><code>
    import message from "./message.js";
    </code></pre>

    <br>
    <a href="#classes" class="btn-prev">&larr; Previous</a>
    <a href="#json" class="btn-next">Next &rarr;</a>
</section>

<section id="json" class="content hidden">
    <h1>JSON dalam JavaScript</h1>

    <p>JSON adalah format untuk menyimpan dan mengirimkan data.</p>
    <p>JSON sering digunakan saat data dikirim dari server ke halaman web.</p>

    <h2>Apa itu JSON?</h2>
    <ul>
        <li>JSON adalah singkatan dari <strong>JavaScript Object Notation</strong>.</li>
        <li>JSON adalah format pertukaran data yang ringan.</li>
        <li>JSON bersifat independen terhadap bahasa pemrograman <em>language independent</em>.</li>
        <li>JSON bersifat "self-describing" (dapat dipahami dengan mudah).</li>
    </ul>
    <p><strong>Catatan:</strong> Sintaks JSON berasal dari sintaks notasi objek JavaScript, tetapi format JSON hanya berupa teks. Kode untuk membaca dan menghasilkan data JSON dapat ditulis dalam bahasa pemrograman apapun.</p>

    <h2>Contoh JSON</h2>
    <p>Contoh sintaks JSON yang mendefinisikan objek <code>employees</code>: sebuah array yang berisi 3 catatan karyawan (objek):</p>
    <pre><code>
    {
      "employees":[
        {"firstName":"John", "lastName":"Doe"},
        {"firstName":"Anna", "lastName":"Smith"},
        {"firstName":"Peter", "lastName":"Jones"}
      ]
    }
    </code></pre>

    <h2>Format JSON Menjadi Objek JavaScript</h2>
    <p>Format JSON secara sintaksis identik dengan kode untuk membuat objek JavaScript.</p>
    <p>Karena kesamaan ini, sebuah program JavaScript dapat dengan mudah mengonversi data JSON menjadi objek JavaScript asli.</p>

    <h2>Aturan Sintaks JSON</h2>
    <ul>
        <li>Data dalam JSON ditulis dalam pasangan nama/nilai.</li>
        <li>Data dipisahkan dengan koma.</li>
        <li>Kurung kurawal <code>{}</code> digunakan untuk objek.</li>
        <li>Brackets <code>[]</code> digunakan untuk array.</li>
    </ul>

    <h3>Data JSON - Nama dan Nilai</h3>
    <p>Data JSON ditulis sebagai pasangan nama/nilai, mirip dengan properti objek JavaScript.</p>
    <p>Pasangan nama/nilai terdiri dari nama field (dalam tanda kutip ganda), diikuti oleh tanda titik dua, dan diakhiri dengan nilai:</p>
    <pre><code>"firstName": "John"</code></pre>
    <p>Nama dalam JSON harus menggunakan tanda kutip ganda. Sedangkan pada JavaScript, nama tidak harus dalam tanda kutip.</p>

    <h3>Objek JSON</h3>
    <p>Objek JSON ditulis di dalam kurung kurawal (<code>{}</code>).</p>
    <p>Seperti di JavaScript, objek dapat mengandung beberapa pasangan nama/nilai:</p>
    <pre><code>{"firstName":"John", "lastName":"Doe"}</code></pre>

    <h3>Array JSON</h3>
    <p>Array JSON ditulis di dalam tanda kurung siku (<code>[]</code>).</p>
    <p>Seperti di JavaScript, sebuah array dapat berisi objek:</p>
    <pre><code>
    "employees":[
      {"firstName":"John", "lastName":"Doe"},
      {"firstName":"Anna", "lastName":"Smith"},
      {"firstName":"Peter", "lastName":"Jones"}
    ]
    </code></pre>
    <p>Pada contoh di atas, objek <code>"employees"</code> adalah sebuah array. Array ini berisi tiga objek, dimana masing-masing objek adalah catatan seseorang dengan nama depan dan nama belakang.</p>

    <h2>Mengonversi Teks JSON Menjadi Objek JavaScript</h2>
    <p>Penggunaan umum JSON adalah untuk membaca data dari server web, kemudian menampilkan data tersebut pada halaman web.</p>
    <p>Untuk kesederhanaan, kita bisa mendemonstrasikan ini dengan menggunakan string sebagai input.</p>
    
    <h3>Langkah-langkah:</h3>
    <ol>
        <li>Pertama, buat string JavaScript yang berisi sintaks JSON:</li>
        <pre><code>
        let text = '{ "employees" : [' +
        '{ "firstName":"John" , "lastName":"Doe" },' +
        '{ "firstName":"Anna" , "lastName":"Smith" },' +
        '{ "firstName":"Peter" , "lastName":"Jones" } ]}';
        </code></pre>
        <li>Kemudian, gunakan fungsi built-in JavaScript <code>JSON.parse()</code> untuk mengonversi string tersebut menjadi objek JavaScript:</li>
        <pre><code>
        const obj = JSON.parse(text);
        </code></pre>
        <li>Terakhir, gunakan objek JavaScript baru ini di halaman Anda:</li>
        <pre><code>
        <p id="demo"></p>
        
        <script>
        document.getElementById("demo").innerHTML =
        obj.employees[1].firstName + " " + obj.employees[1].lastName;
        </script>
        </code></pre>
    </ol>

    <br>
    <a href="#modules" class="btn-prev">&larr; Previous</a>
    <a href="#debugging" class="btn-next">Next &rarr;</a>
</section>

<section id="debugging" class="content hidden">
    <h1>Debugging JavaScript</h1>

    <p>Kesalahan bisa (dan pasti) terjadi setiap kali Anda menulis kode komputer yang baru.</p>

    <h2>Debugging Kode</h2>
    <p>Kode pemrograman mungkin mengandung kesalahan sintaksis atau kesalahan logika.</p>
    <p>Banyak dari kesalahan ini sulit untuk didiagnosis.</p>
    <p>Seringkali, ketika kode pemrograman mengandung kesalahan, tidak ada yang terjadi. Tidak ada pesan kesalahan, dan Anda tidak mendapatkan petunjuk di mana harus mencari kesalahan.</p>
    <p>Mencari (dan memperbaiki) kesalahan dalam kode pemrograman disebut debugging kode.</p>

    <h2>Debugger JavaScript</h2>
    <p>Debugging tidaklah mudah. Namun, beruntungnya, semua browser modern memiliki debugger JavaScript bawaan.</p>
    <p>Debugger bawaan ini dapat diaktifkan dan dimatikan, memaksa kesalahan untuk dilaporkan kepada pengguna.</p>
    <p>Dengan debugger, Anda juga dapat menetapkan breakpoints (tempat di mana eksekusi kode dapat dihentikan), dan memeriksa variabel saat kode sedang dieksekusi.</p>
    <p>Biasanya (jika tidak, ikuti langkah-langkah di bagian bawah halaman ini), Anda mengaktifkan debugging di browser dengan menekan tombol <code>F12</code>, dan memilih "Console" di menu debugger.</p>

    <h2>Metode <code>console.log()</code></h2>
    <p>Jika browser Anda mendukung debugging, Anda dapat menggunakan <code>console.log()</code> untuk menampilkan nilai JavaScript di jendela debugger:</p>

    <h3>Contoh</h3>
    <pre><code>
    <!DOCTYPE html>
    <html>
    <body>

    <h1>Halaman Web Pertama Saya</h1>

    <script>
    a = 5;
    b = 6;
    c = a + b;
    console.log(c);
    </script>

    </body>
    </html>
    </code></pre>
    <p><strong>Tip:</strong> Baca lebih lanjut tentang metode <code>console.log()</code> di referensi JavaScript Console kami.</p>

    <h2>Menetapkan Breakpoints</h2>
    <p>Di jendela debugger, Anda dapat menetapkan breakpoints pada kode JavaScript.</p>
    <p>Setiap kali eksekusi mencapai breakpoint, JavaScript akan berhenti, dan Anda dapat memeriksa nilai-nilai JavaScript.</p>
    <p>Setelah memeriksa nilai-nilai, Anda dapat melanjutkan eksekusi kode (biasanya dengan tombol play).</p>

    <h2>Kata Kunci <code>debugger</code></h2>
    <p>Kata kunci <code>debugger</code> menghentikan eksekusi JavaScript, dan memanggil (jika tersedia) fungsi debugging.</p>
    <p>Ini berfungsi sama seperti menetapkan breakpoint di debugger.</p>
    <p>Jika tidak ada debugging yang tersedia, pernyataan <code>debugger</code> tidak akan berpengaruh.</p>
    <p>Dengan debugger yang diaktifkan, kode ini akan berhenti dieksekusi sebelum mencapai baris ketiga.</p>

    <h3>Contoh</h3>
    <pre><code>
    let x = 15 * 5;
    debugger;
    document.getElementById("demo").innerHTML = x;
    </code></pre>

    <h2>Alat Debugging di Browser Utama</h2>
    <p>Biasanya, Anda mengaktifkan debugging di browser dengan menekan <code>F12</code>, dan memilih "Console" di menu debugger.</p>
    <p>Jika tidak, ikuti langkah-langkah berikut:</p>

    <h3>Chrome</h3>
    <ol>
        <li>Buka browser.</li>
        <li>Dari menu, pilih "More tools".</li>
        <li>Dari tools, pilih "Developer tools".</li>
        <li>Akhirnya, pilih "Console".</li>
    </ol>

    <h3>Firefox</h3>
    <ol>
        <li>Buka browser.</li>
        <li>Dari menu, pilih "Web Developer".</li>
        <li>Akhirnya, pilih "Web Console".</li>
    </ol>

    <h3>Edge</h3>
    <ol>
        <li>Buka browser.</li>
        <li>Dari menu, pilih "Developer Tools".</li>
        <li>Akhirnya, pilih "Console".</li>
    </ol>

    <h3>Opera</h3>
    <ol>
        <li>Buka browser.</li>
        <li>Dari menu, pilih "Developer".</li>
        <li>Dari "Developer", pilih "Developer tools".</li>
        <li>Akhirnya, pilih "Console".</li>
    </ol>

    <h3>Safari</h3>
    <ol>
        <li>Pergi ke Safari, Preferences, Advanced di menu utama.</li>
        <li>Centang "Enable Show Develop menu in menu bar".</li>
        <li>Ketika opsi "Develop" muncul di menu:</li>
        <li>Pilih "Show Error Console".</li>
    </ol>

    <h2>Apakah Anda Tahu?</h2>
    <p>Debugging adalah proses pengujian, pencarian, dan pengurangan bug (kesalahan) dalam program komputer.</p>
    <p>Bug komputer pertama yang diketahui ditemukan pada tahun 1947 oleh Grace Hopper, yang menemukannya di dalam komputer Mark II milik Harvard University.</p>

    <br>
    <a href="#json" class="btn-prev">&larr; Previous</a>
    <a href="#style-guide" class="btn-next">Next &rarr;</a>
</section>

<section id="style-guide" class="content hidden">
    <h1>Panduan Gaya JavaScript</h1>

    <p>Selalu gunakan konvensi pengkodean yang sama untuk semua proyek JavaScript Anda.</p>

    <h2>Konvensi Pengkodean JavaScript</h2>
    <p>Konvensi pengkodean adalah pedoman gaya untuk pemrograman. Biasanya mencakup:</p>
    <ul>
        <li>Aturan penamaan dan deklarasi untuk variabel dan fungsi.</li>
        <li>Aturan penggunaan ruang kosong, indentasi, dan komentar.</li>
        <li>Praktik dan prinsip pemrograman.</li>
    </ul>
    <p>Konvensi pengkodean menjamin kualitas:</p>
    <ul>
        <li>Memperbaiki keterbacaan kode</li>
        <li>Mempermudah pemeliharaan kode</li>
    </ul>
    <p>Konvensi pengkodean bisa berupa aturan yang terdokumentasi untuk diikuti oleh tim, atau hanya merupakan praktik pengkodean individu Anda.</p>

    <p>Halaman ini menjelaskan konvensi kode JavaScript umum yang digunakan oleh W3Schools. Anda juga harus membaca bab berikutnya, "Praktik Terbaik", untuk mempelajari cara menghindari jebakan pengkodean.</p>

    <h2>Penamaan Variabel</h2>
    <p>Di W3Schools, kami menggunakan <strong>camelCase</strong> untuk nama pengidentifikasi (variabel dan fungsi).</p>
    <p>Semua nama dimulai dengan huruf.</p>

    <h3>Contoh</h3>
    <pre><code>
    firstName = "John";
    lastName = "Doe";

    price = 19.90;
    tax = 0.20;

    fullPrice = price + (price * tax);
    </code></pre>

    <h2>Spasi di Sekitar Operator</h2>
    <p>Selalu beri spasi di sekitar operator ( = + - * / ), dan setelah koma:</p>

    <h3>Contoh</h3>
    <pre><code>
    let x = y + z;
    const myArray = ["Volvo", "Saab", "Fiat"];
    </code></pre>

    <h2>Indentasi Kode</h2>
    <p>Selalu gunakan 2 spasi untuk indentasi blok kode:</p>

    <h3>Fungsi:</h3>
    <pre><code>
    function toCelsius(fahrenheit) {
      return (5 / 9) * (fahrenheit - 32);
    }
    </code></pre>
    <p>Jangan menggunakan tab (tabulator) untuk indentasi. Berbagai editor menginterpretasikan tab secara berbeda.</p>

    <h2>Aturan Pernyataan</h2>
    <h3>Aturan umum untuk pernyataan sederhana:</h3>
    <p>Selalu akhiri pernyataan sederhana dengan titik koma.</p>

    <h3>Contoh</h3>
    <pre><code>
    const cars = ["Volvo", "Saab", "Fiat"];

    const person = {
      firstName: "John",
      lastName: "Doe",
      age: 50,
      eyeColor: "blue"
    };
    </code></pre>

    <h3>Aturan umum untuk pernyataan kompleks (kompleks):</h3>
    <ul>
        <li>Letakkan tanda kurung pembuka di akhir baris pertama.</li>
        <li>Gunakan satu spasi sebelum tanda kurung pembuka.</li>
        <li>Letakkan tanda kurung penutup pada baris baru, tanpa spasi di depan.</li>
        <li>Jangan akhiri pernyataan kompleks dengan titik koma.</li>
    </ul>

    <h3>Contoh Fungsi:</h3>
    <pre><code>
    function toCelsius(fahrenheit) {
      return (5 / 9) * (fahrenheit - 32);
    }
    </code></pre>

    <h3>Contoh Perulangan:</h3>
    <pre><code>
    for (let i = 0; i < 5; i++) {
      x += i;
    }
    </code></pre>

    <h3>Contoh Kondisional:</h3>
    <pre><code>
    if (time < 20) {
      greeting = "Good day";
    } else {
      greeting = "Good evening";
    }
    </code></pre>

    <h2>Aturan Objek</h2>
    <h3>Aturan umum untuk definisi objek:</h3>
    <ul>
        <li>Letakkan tanda kurung pembuka pada baris yang sama dengan nama objek.</li>
        <li>Gunakan titik dua dan satu spasi antara setiap properti dan nilainya.</li>
        <li>Gunakan tanda kutip di sekitar nilai string, tidak di sekitar nilai numerik.</li>
        <li>Jangan menambahkan koma setelah pasangan properti-nilai terakhir.</li>
        <li>Letakkan tanda kurung penutup pada baris baru, tanpa spasi di depan.</li>
        <li>Selalu akhiri definisi objek dengan titik koma.</li>
    </ul>

    <h3>Contoh:</h3>
    <pre><code>
    const person = {
      firstName: "John",
      lastName: "Doe",
      age: 50,
      eyeColor: "blue"
    };
    </code></pre>

    <p>Objek pendek dapat ditulis dalam bentuk yang lebih ringkas, hanya dengan spasi antara properti, seperti ini:</p>

    <pre><code>
    const person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
    </code></pre>

    <h2>Panjang Baris < 80 Karakter</h2>
    <p>Agar mudah dibaca, hindari baris yang lebih panjang dari 80 karakter.</p>
    <p>Jika suatu pernyataan JavaScript tidak muat dalam satu baris, tempat terbaik untuk memecahnya adalah setelah operator atau koma.</p>

    <h3>Contoh:</h3>
    <pre><code>
    document.getElementById("demo").innerHTML =
    "Hello Dolly.";
    </code></pre>

    <h2>Konvensi Penamaan</h2>
    <p>Selalu gunakan konvensi penamaan yang sama untuk semua kode Anda. Sebagai contoh:</p>
    <ul>
        <li>Nama variabel dan fungsi ditulis dalam <strong>camelCase</strong></li>
        <li>Variabel global ditulis dengan huruf kapital (Kami tidak, tetapi ini cukup umum)</li>
        <li>Konstanta (seperti PI) ditulis dengan huruf kapital</li>
    </ul>

    <p>Haruskah Anda menggunakan tanda hubung, camelCase, atau garis bawah dalam nama variabel?</p>
    <p>Ini adalah pertanyaan yang sering dibahas oleh programmer. Jawabannya tergantung pada siapa yang Anda tanyakan:</p>

    <ul>
        <li><strong>Tanda Hubung</strong>: HTML5 memungkinkan atribut yang dimulai dengan <code>data-</code> (misalnya, <code>data-quantity</code>, <code>data-price</code>) dan CSS menggunakan tanda hubung dalam nama properti (misalnya, <code>font-size</code>), tetapi tanda hubung tidak diperbolehkan dalam nama JavaScript.</li>
        <li><strong>Garis Bawah</strong>: Banyak programmer lebih suka menggunakan garis bawah (misalnya, <code>date_of_birth</code>), terutama di basis data SQL.</li>
        <li><strong>PascalCase</strong>: PascalCase sering digunakan oleh pemrogram C.</li>
        <li><strong>camelCase</strong>: camelCase digunakan oleh JavaScript sendiri, jQuery, dan pustaka JavaScript lainnya.</li>
    </ul>

    <p>Jangan mulai nama dengan tanda <code>$</code>, karena ini akan menyebabkan konflik dengan banyak nama pustaka JavaScript.</p>

    <h2>Memuat JavaScript dalam HTML</h2>
    <p>Gunakan sintaks sederhana untuk memuat skrip eksternal (atribut <code>type</code> tidak diperlukan):</p>

    <pre><code>
    <script src="myscript.js"></script>
    </code></pre>

    <h2>Akses Elemen HTML</h2>
    <p>Akibat dari penggunaan gaya HTML yang "berantakan" dapat menyebabkan kesalahan JavaScript.</p>
    <p>Kedua pernyataan JavaScript berikut akan menghasilkan hasil yang berbeda:</p>

    <pre><code>
    const obj = getElementById("Demo");
    const obj = getElementById("demo");
    </code></pre>
    <p>Jika memungkinkan, gunakan konvensi penamaan yang sama (seperti JavaScript) di HTML.</p>

    <h2>Ekstensi File</h2>
    <ul>
        <li>File HTML harus memiliki ekstensi <code>.html</code> (diperbolehkan <code>.htm</code>).</li>
        <li>File CSS harus memiliki ekstensi <code>.css</code>.</li>
        <li>File JavaScript harus memiliki ekstensi <code>.js</code>.</li>
    </ul>

    <h2>Gunakan Nama File Huruf Kecil</h2>
    <p>Sebagian besar server web (Apache, Unix) peka terhadap huruf dalam nama file:</p>
    <p><code>london.jpg</code> tidak dapat diakses sebagai <code>London.jpg</code>.</p>
    <p>Jika Anda menggunakan campuran huruf besar dan kecil, pastikan konsistensi yang sangat ketat.</p>
    <p>Jika Anda berpindah dari server yang tidak peka terhadap huruf, ke server yang peka terhadap huruf, bahkan kesalahan kecil dapat merusak situs web Anda.</p>

    <p>Untuk menghindari masalah ini, selalu gunakan nama file huruf kecil (jika memungkinkan).</p>

    <h2>Kinerja</h2>
    <p>Konvensi pengkodean tidak digunakan oleh komputer. Sebagian besar aturan ini memiliki sedikit dampak pada eksekusi program.</p>
    <p>Indentasi dan spasi tambahan tidak signifikan pada skrip kecil.</p>
    <p>Untuk kode dalam pengembangan, keterbacaan harus diutamakan. Skrip produksi yang lebih besar harus diminimalkan.</p>

    <br>
    <a href="#debugging" class="btn-prev">&larr; Previous</a>
    <a href="#best-practices" class="btn-next">Next &rarr;</a>
</section>

<section id="best-practices" class="content hidden">
    <h1>Praktik Terbaik JavaScript</h1>

    <p>Berikut adalah beberapa praktik terbaik yang perlu diikuti saat menulis kode JavaScript:</p>
    
    <h2>Hindari Variabel Global</h2>
    <p>Minimalkan penggunaan variabel global. Ini termasuk semua tipe data, objek, dan fungsi. Variabel dan fungsi global dapat ditimpa oleh skrip lain.</p>
    <p>Gunakan variabel lokal, dan pelajari cara menggunakan <i>closures</i>.</p>

    <h2>Selalu Deklarasikan Variabel Lokal</h2>
    <p>Semua variabel yang digunakan dalam suatu fungsi harus dideklarasikan sebagai variabel lokal. Variabel lokal harus dideklarasikan dengan kata kunci <code>var</code>, <code>let</code>, atau <code>const</code>; jika tidak, variabel tersebut akan menjadi variabel global.</p>
    <p>Mode ketat (<code>strict mode</code>) tidak mengizinkan variabel yang tidak dideklarasikan.</p>

    <h2>Deklarasi di Atas</h2>
    <p>Ini adalah praktik pengkodean yang baik untuk meletakkan semua deklarasi di bagian atas setiap skrip atau fungsi. Hal ini akan:</p>
    <ul>
        <li>Menyediakan kode yang lebih bersih</li>
        <li>Menyediakan satu tempat untuk mencari variabel lokal</li>
        <li>Membuat lebih mudah untuk menghindari variabel global yang tidak diinginkan</li>
        <li>Mengurangi kemungkinan deklarasi ulang yang tidak diinginkan</li>
    </ul>
    <p>Contoh:</p>
    <pre><code>
// Deklarasi di awal
let firstName, lastName, price, discount, fullPrice;

// Digunakan kemudian
firstName = "John";
lastName = "Doe";

price = 19.90;
discount = 0.10;

fullPrice = price - discount;
    </code></pre>

    <h2>Inisialisasi Variabel</h2>
    <p>Ini adalah praktik pengkodean yang baik untuk menginisialisasi variabel saat deklarasi. Hal ini akan:</p>
    <ul>
        <li>Menyediakan kode yang lebih bersih</li>
        <li>Menyediakan satu tempat untuk menginisialisasi variabel</li>
        <li>Menghindari nilai <code>undefined</code></li>
    </ul>
    <p>Contoh:</p>
    <pre><code>
// Deklarasi dan inisialisasi di awal
let firstName = "";
let lastName = "";
let price = 0;
let discount = 0;
let fullPrice = 0;

const myArray = [];
const myObject = {};
    </code></pre>

    <h2>Deklarasikan Objek dengan <code>const</code></h2>
    <p>Deklarasikan objek dengan <code>const</code> untuk mencegah perubahan tipe secara tidak sengaja.</p>
    <p>Contoh:</p>
    <pre><code>
let car = {type: "Fiat", model: "500", color: "white"};
car = "Fiat";  // Mengubah objek menjadi string (tidak disarankan)

const car = {type: "Fiat", model: "500", color: "white"};
car = "Fiat";  // Tidak memungkinkan
    </code></pre>

    <h2>Deklarasikan Array dengan <code>const</code></h2>
    <p>Deklarasikan array dengan <code>const</code> untuk mencegah perubahan tipe secara tidak sengaja.</p>
    <p>Contoh:</p>
    <pre><code>
let cars = ["Saab", "Volvo", "BMW"];
cars = 3;    // Mengubah array menjadi angka (tidak disarankan)

const cars = ["Saab", "Volvo", "BMW"];
cars = 3;    // Tidak memungkinkan
    </code></pre>

    <h2>Hindari Penggunaan <code>new Object()</code></h2>
    <p>Gunakan <code>""</code> untuk string, <code>0</code> untuk angka, <code>false</code> untuk boolean, <code>{}</code> untuk objek, <code>[]</code> untuk array, dan <code>function (){}</code> untuk fungsi, bukan <code>new Object()</code>, <code>new String()</code>, <code>new Array()</code>, atau <code>new Function()</code>.</p>
    <p>Contoh:</p>
    <pre><code>
let x1 = "";             // string primitif
let x2 = 0;              // angka primitif
let x3 = false;          // boolean primitif
const x4 = {};           // objek baru
const x5 = [];           // array baru
const x6 = /()/;         // objek regexp baru
const x7 = function(){}; // objek fungsi baru
    </code></pre>

    <h2>Waspadai Konversi Tipe Otomatis</h2>
    <p>JavaScript adalah bahasa dengan tipe data yang longgar. Sebuah variabel bisa berubah tipe datanya secara otomatis.</p>
    <p>Contoh:</p>
    <pre><code>
let x = "Hello";     // tipe x adalah string
x = 5;               // mengubah tipe x menjadi angka
    </code></pre>

    <h2>Gunakan Operator Perbandingan <code>===</code></h2>
    <p>Operator perbandingan <code>==</code> selalu mengonversi tipe data sebelum membandingkan. Gunakan operator <code>===</code> untuk membandingkan nilai dan tipe secara eksplisit.</p>
    <p>Contoh:</p>
    <pre><code>
0 == "";        // true
1 == "1";       // true
1 == true;      // true

0 === "";       // false
1 === "1";      // false
1 === true;     // false
    </code></pre>

    <h2>Gunakan Nilai Default untuk Parameter</h2>
    <p>Jika sebuah fungsi dipanggil dengan argumen yang hilang, nilai parameter yang hilang akan diatur menjadi <code>undefined</code>. Nilai <code>undefined</code> ini dapat merusak kode Anda, sehingga disarankan untuk memberikan nilai default pada parameter.</p>
    <p>Contoh:</p>
    <pre><code>
function myFunction(x, y) {
  if (y === undefined) {
    y = 0;
  }
}
    </code></pre>
    <p>ECMAScript 2015 memungkinkan penetapan parameter default langsung dalam definisi fungsi:</p>
    <pre><code>
function myFunction(a = 1, b = 1) {
  // kode fungsi
}
    </code></pre>

    <h2>Akhiri <code>switch</code> dengan Default</h2>
    <p>Selalu akhiri <code>switch</code> dengan <code>default</code>, bahkan jika Anda rasa itu tidak diperlukan.</p>
    <p>Contoh:</p>
    <pre><code>
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
    break;
  default:
    day = "Unknown";
}
    </code></pre>

    <h2>Hindari Menggunakan Number, String, dan Boolean sebagai Objek</h2>
    <p>Selalu perlakukan angka, string, atau boolean sebagai nilai primitif, bukan objek. Mendeklarasikan tipe ini sebagai objek akan memperlambat eksekusi dan dapat menyebabkan efek samping yang buruk.</p>
    <p>Contoh:</p>
    <pre><code>
let x = "John";             
let y = new String("John");
(x === y) // salah karena x adalah string dan y adalah objek.
    </code></pre>
    <p>Atau lebih buruk lagi:</p>
    <pre><code>
let x = new String("John");             
let y = new String("John");
(x == y) // salah karena objek tidak dapat dibandingkan.
    </code></pre>

    <h2>Hindari Penggunaan <code>eval()</code></h2>
    <p>Fungsi <code>eval()</code> digunakan untuk menjalankan teks sebagai kode. Dalam hampir semua kasus, penggunaan <code>eval()</code> tidak diperlukan dan harus dihindari. Karena memungkinkan kode yang sewenang-wenang untuk dijalankan, ini juga mewakili masalah keamanan.</p>

    <br>
    <a href="#style-guide" class="btn-prev">&larr; Previous</a>
    <a href="#mistakes" class="btn-next">Next &rarr;</a>
</section>

<section id="mistakes" class="content hidden">
    <h1>Kesalahan Umum dalam JavaScript</h1>

    <p>Bab ini menjelaskan beberapa kesalahan umum yang sering terjadi dalam pemrograman JavaScript.</p>

    <h2>Secara Tidak Sengaja Menggunakan Operator Penugasan</h2>
    <p>Program JavaScript dapat menghasilkan hasil yang tidak terduga jika seorang programmer secara tidak sengaja menggunakan operator penugasan (<code>=</code>), bukan operator perbandingan (<code>==</code>) dalam sebuah pernyataan <code>if</code>.</p>
    
    <p>Contoh berikut ini akan menghasilkan <code>false</code> (seperti yang diharapkan) karena <code>x</code> tidak sama dengan 10:</p>
    <pre><code>
    let x = 0;
    if (x == 10) { }
    </code></pre>

    <p>Namun, contoh ini akan menghasilkan <code>true</code> (mungkin tidak diharapkan) karena 10 dianggap <code>true</code>:</p>
    <pre><code>
    let x = 0;
    if (x = 10) { }
    </code></pre>

    <p>Contoh berikut ini akan menghasilkan <code>false</code> (mungkin tidak diharapkan) karena 0 dianggap <code>false</code>:</p>
    <pre><code>
    let x = 0;
    if (x = 0) { }
    </code></pre>

    <p>Perlu diketahui bahwa penugasan selalu mengembalikan nilai dari penugasan tersebut.</p>

    <h2>Mengharapkan Perbandingan Longgar</h2>
    <p>Dalam perbandingan biasa, tipe data tidak masalah. Contoh berikut ini menghasilkan <code>true</code>:</p>
    <pre><code>
    let x = 10;
    let y = "10";
    if (x == y) { }
    </code></pre>

    <p>Namun, dalam perbandingan ketat, tipe data penting. Contoh ini menghasilkan <code>false</code>:</p>
    <pre><code>
    let x = 10;
    let y = "10";
    if (x === y) { }
    </code></pre>

    <p>Satu kesalahan umum adalah lupa bahwa pernyataan <code>switch</code> menggunakan perbandingan ketat. Contoh berikut ini akan menampilkan peringatan:</p>
    <pre><code>
    let x = 10;
    switch(x) {
        case 10: alert("Hello");
    }
    </code></pre>

    <p>Namun, contoh berikut ini tidak akan menampilkan peringatan:</p>
    <pre><code>
    let x = 10;
    switch(x) {
        case "10": alert("Hello");
    }
    </code></pre>

    <h2>Bingung antara Penjumlahan & Penggabungan</h2>
    <p>Penjumlahan berfokus pada penambahan angka. Penggabungan berfokus pada penambahan string. Di JavaScript, kedua operasi ini menggunakan operator <code>+</code> yang sama. Oleh karena itu, penjumlahan angka sebagai angka akan menghasilkan hasil yang berbeda jika dibandingkan dengan penggabungan angka sebagai string:</p>
    
    <pre><code>
    let x = 10;
    x = 10 + 5;       // Sekarang x adalah 15

    let y = 10;
    y += "5";        // Sekarang y adalah "105"
    </code></pre>

    <p>Ketika menambahkan dua variabel, hasilnya bisa sulit diprediksi:</p>
    <pre><code>
    let x = 10;
    let y = 5;
    let z = x + y;     // Sekarang z adalah 15

    let x = 10;
    let y = "5";
    let z = x + y;     // Sekarang z adalah "105"
    </code></pre>

    <h2>Salah Memahami Bilangan Pecahan</h2>
    <p>Semua angka di JavaScript disimpan sebagai angka titik mengambang 64-bit (float). Semua bahasa pemrograman, termasuk JavaScript, memiliki kesulitan dalam menangani nilai pecahan yang tepat:</p>
    <pre><code>
    let x = 0.1;
    let y = 0.2;
    let z = x + y;      // Hasilnya di z tidak akan 0.3
    </code></pre>

    <p>Untuk mengatasi masalah ini, kita bisa mengalikan dan membagi angka:</p>
    <pre><code>
    let z = (x * 10 + y * 10) / 10;       // z akan menjadi 0.3
    </code></pre>

    <h2>Memecah String di JavaScript</h2>
    <p>JavaScript memungkinkan Anda untuk memecah sebuah pernyataan menjadi dua baris:</p>
    <pre><code>
    let x = "Hello World!";
    </code></pre>

    <p>Namun, memecah pernyataan di tengah string tidak akan berhasil:</p>
    <pre><code>
    let x = "Hello
    World!";
    </code></pre>

    <p>Jika Anda perlu memecah pernyataan dalam sebuah string, Anda harus menggunakan tanda "backslash":</p>
    <pre><code>
    let x = "Hello \
    World!";
    </code></pre>

    <h2>Menempatkan Titik Koma yang Salah</h2>
    <p>Karena penempatan titik koma yang salah, blok kode berikut ini akan dieksekusi terlepas dari nilai x:</p>
    <pre><code>
    if (x == 19);
    {
        // blok kode
    }
    </code></pre>

    <h2>Memecah Pernyataan Return</h2>
    <p>Secara default, JavaScript menutup pernyataan secara otomatis di akhir baris. Karena itu, dua contoh berikut akan menghasilkan hasil yang sama:</p>
    
    <pre><code>
    function myFunction(a) {
      let power = 10;
      return a * power;
    }
    </code></pre>

    <pre><code>
    function myFunction(a) {
      let power = 10;
      return a * power;
    }
    </code></pre>

    <p>JavaScript juga memungkinkan Anda untuk memecah pernyataan menjadi dua baris. Karena itu, contoh berikut juga akan menghasilkan hasil yang sama:</p>

    <pre><code>
    function myFunction(a) {
      let power = 10; 
      return a * power;
    }
    </code></pre>

    <p>Namun, apa yang akan terjadi jika Anda memecah pernyataan <code>return</code> menjadi dua baris seperti ini:</p>

    <pre><code>
    function myFunction(a) {
      let power = 10; 
      return
      a * power;
    }
    </code></pre>

    <p>Fungsi ini akan mengembalikan <code>undefined</code>!</p>

    <p>Kenapa? Karena JavaScript menganggap bahwa Anda berniat seperti ini:</p>

    <pre><code>
    function myFunction(a) {
      let power = 10; 
      return;
      a * power;
    }
    </code></pre>

    <h2>Mengakses Array dengan Indeks Bernama</h2>
    <p>Banyak bahasa pemrograman mendukung array dengan indeks bernama. Array dengan indeks bernama disebut sebagai array asosiasi (atau hash). JavaScript tidak mendukung array dengan indeks bernama.</p>

    <pre><code>
    const person = [];
    person[0] = "John";
    person[1] = "Doe";
    person[2] = 46;
    person.length;       // person.length akan mengembalikan 3
    person[0];           // person[0] akan mengembalikan "John"
    </code></pre>

    <p>Di JavaScript, objek menggunakan indeks bernama. Jika Anda menggunakan indeks bernama saat mengakses array, JavaScript akan mengubah array menjadi objek standar. Setelah redefinisi otomatis, metode dan properti array akan menghasilkan hasil yang tidak terdefinisi atau salah:</p>

    <pre><code>
    const person = [];
    person["firstName"] = "John";
    person["lastName"] = "Doe";
    person["age"] = 46;
    person.length;      // person.length akan mengembalikan 0
    person[0];          // person[0] akan mengembalikan undefined
    </code></pre>

    <h2>Menambahkan Koma di Akhir Definisi</h2>
    <p>Koma di akhir definisi objek dan array diperbolehkan dalam ECMAScript 5.</p>

    <pre><code>
    person = {firstName:"John", lastName:"Doe", age:46,}
    </code></pre>

    <pre><code>
    points = [40, 100, 1, 5, 25, 10,];
    </code></pre>

    <p>Peringatan! Internet Explorer 8 akan mengalami crash.</p>

    <p>JSON tidak mengizinkan koma di akhir.</p>

    <pre><code>
    person = {"firstName":"John", "lastName":"Doe", "age":46}
    </code></pre>

    <pre><code>
    points = [40, 100, 1, 5, 25, 10];
    </code></pre>

    <h2>Undefined Tidak Sama dengan Null</h2>
    <p>Objek, variabel, properti, dan metode JavaScript bisa memiliki nilai <code>undefined</code>. Selain itu, objek JavaScript kosong bisa memiliki nilai <code>null</code>.</p>

    <p>Anda bisa menguji apakah objek ada dengan menguji tipe data <code>undefined</code>:</p>

    <pre><code>
    if (typeof myObj === "undefined") { }
    </code></pre>

    <p>Namun, Anda tidak bisa menguji apakah sebuah objek <code>null</code>, karena ini akan menghasilkan error jika objek tersebut <code>undefined</code>:</p>

    <pre><code>
    if (myObj === null) { }
    </code></pre>

    <p>Untuk mengatasi masalah ini, Anda harus menguji terlebih dahulu bahwa objek tersebut tidak <code>undefined</code>, dan tidak <code>null</code>.</p>

    <pre><code>
    if (typeof myObj !== "undefined" && myObj !== null) { }
    </code></pre>

    <br>
    <a href="#best-practices" class="btn-prev">&larr; Previous</a>
    <a href="#performance" class="btn-next">Next &rarr;</a>
</section>

<section id="performance" class="content hidden">
    <h1>Performa JavaScript</h1>

    <p>Berikut adalah cara-cara untuk mempercepat kode JavaScript Anda dan meningkatkan performa aplikasi web.</p>

    <h2>1. Kurangi Aktivitas di Dalam Loop</h2>
    <p>Loop sering digunakan dalam pemrograman. Setiap pernyataan dalam sebuah loop, termasuk pernyataan <code>for</code>, dieksekusi untuk setiap iterasi loop. Pernyataan atau penugasan yang bisa ditempatkan di luar loop akan membuat loop berjalan lebih cepat.</p>

    <p><strong>Kode Buruk:</strong></p>
    <pre><code>
    for (let i = 0; i < arr.length; i++) {
      // kode lainnya
    }
    </code></pre>

    <p><strong>Kode yang Lebih Baik:</strong></p>
    <pre><code>
    let l = arr.length;
    for (let i = 0; i < l; i++) {
      // kode lainnya
    }
    </code></pre>

    <p>Kode buruk mengakses properti <code>length</code> dari array setiap kali iterasi loop. Kode yang lebih baik mengakses properti <code>length</code> di luar loop dan membuat loop berjalan lebih cepat.</p>

    <h2>2. Kurangi Akses ke DOM</h2>
    <p>Akses ke DOM HTML sangat lambat, dibandingkan dengan pernyataan JavaScript lainnya. Jika Anda mengharapkan untuk mengakses elemen DOM beberapa kali, akseslah sekali saja, dan gunakan elemen tersebut sebagai variabel lokal.</p>

    <p><strong>Contoh:</strong></p>
    <pre><code>
    const obj = document.getElementById("demo");
    obj.innerHTML = "Hello";
    </code></pre>

    <h2>3. Kurangi Ukuran DOM</h2>
    <p>Jaga jumlah elemen dalam DOM HTML tetap kecil. Ini akan selalu meningkatkan kecepatan pemuatan halaman dan mempercepat rendering (penampilan halaman), terutama di perangkat kecil. Setiap usaha untuk mencari elemen di DOM (seperti menggunakan <code>getElementsByTagName</code>) akan mendapatkan manfaat dari DOM yang lebih kecil.</p>

    <h2>4. Hindari Variabel yang Tidak Diperlukan</h2>
    <p>Jangan membuat variabel baru jika Anda tidak berniat menyimpan nilainya. Sering kali Anda bisa menggantikan kode seperti ini:</p>

    <p><strong>Kode Buruk:</strong></p>
    <pre><code>
    let fullName = firstName + " " + lastName;
    document.getElementById("demo").innerHTML = fullName;
    </code></pre>

    <p><strong>Kode yang Lebih Baik:</strong></p>
    <pre><code>
    document.getElementById("demo").innerHTML = firstName + " " + lastName;
    </code></pre>

    <h2>5. Tunda Pemuatan JavaScript</h2>
    <p>Menempatkan skrip Anda di bagian bawah body halaman memungkinkan browser untuk memuat halaman terlebih dahulu. Sementara skrip sedang diunduh, browser tidak akan memulai unduhan lainnya. Selain itu, semua aktivitas parsing dan rendering bisa terblokir. Sebagai alternatif, Anda bisa menggunakan atribut <code>defer="true"</code> dalam tag script.</p>

    <p><strong>Contoh:</strong></p>
    <pre><code>
    <script>
    window.onload = function() {
      const element = document.createElement("script");
      element.src = "myScript.js";
      document.body.appendChild(element);
    };
    </script>
    </code></pre>

    <h2>6. Hindari Penggunaan <code>with</code></h2>
    <p>Hindari menggunakan kata kunci <code>with</code>. Penggunaan <code>with</code> memiliki dampak negatif pada kecepatan dan juga membingungkan ruang lingkup JavaScript. Kata kunci <code>with</code> tidak diizinkan dalam mode ketat (<code>strict mode</code>).</p>

    <br>
    <a href="#mistakes" class="btn-prev">&larr; Previous</a>
    <a href="#reserved-words" class="btn-next">Next &rarr;</a>        
</section>

<section id="reserved-words" class="content hidden">
    <h1>Kata Kunci yang Direservasi dalam JavaScript</h1>

    <p>Dalam JavaScript, Anda tidak dapat menggunakan kata kunci yang sudah dipesan (reserved words) ini sebagai variabel, label, atau nama fungsi:</p>
    
    <h2>Kata Kunci yang Direservasi</h2>
    <p>Berikut adalah daftar kata kunci yang tidak boleh digunakan sebagai variabel, label, atau nama fungsi:</p>
    <ul>
        <li><strong>abstract</strong></li>
        <li><strong>arguments</strong></li>
        <li><strong>await</strong> (baru di ECMAScript 6)</li>
        <li><strong>boolean</strong></li>
        <li><strong>break</strong></li>
        <li><strong>byte</strong></li>
        <li><strong>case</strong></li>
        <li><strong>catch</strong></li>
        <li><strong>char</strong></li>
        <li><strong>class</strong> (baru di ECMAScript 6)</li>
        <li><strong>const</strong> (baru di ECMAScript 6)</li>
        <li><strong>continue</strong></li>
        <li><strong>debugger</strong></li>
        <li><strong>default</strong></li>
        <li><strong>delete</strong></li>
        <li><strong>do</strong></li>
        <li><strong>double</strong></li>
        <li><strong>else</strong></li>
        <li><strong>enum</strong> (baru di ECMAScript 6)</li>
        <li><strong>eval</strong></li>
        <li><strong>export</strong> (baru di ECMAScript 6)</li>
        <li><strong>extends</strong> (baru di ECMAScript 6)</li>
        <li><strong>false</strong></li>
        <li><strong>final</strong></li>
        <li><strong>finally</strong></li>
        <li><strong>float</strong></li>
        <li><strong>for</strong></li>
        <li><strong>function</strong></li>
        <li><strong>goto</strong></li>
        <li><strong>if</strong></li>
        <li><strong>implements</strong></li>
        <li><strong>import</strong> (baru di ECMAScript 6)</li>
        <li><strong>in</strong></li>
        <li><strong>instanceof</strong></li>
        <li><strong>int</strong></li>
        <li><strong>interface</strong></li>
        <li><strong>let</strong> (baru di ECMAScript 6)</li>
        <li><strong>long</strong></li>
        <li><strong>native</strong></li>
        <li><strong>new</strong></li>
        <li><strong>null</strong></li>
        <li><strong>package</strong></li>
        <li><strong>private</strong></li>
        <li><strong>protected</strong></li>
        <li><strong>public</strong></li>
        <li><strong>return</strong></li>
        <li><strong>short</strong></li>
        <li><strong>static</strong></li>
        <li><strong>super</strong> (baru di ECMAScript 6)</li>
        <li><strong>switch</strong></li>
        <li><strong>synchronized</strong></li>
        <li><strong>this</strong></li>
        <li><strong>throw</strong></li>
        <li><strong>throws</strong></li>
        <li><strong>transient</strong></li>
        <li><strong>true</strong></li>
        <li><strong>try</strong></li>
        <li><strong>typeof</strong></li>
        <li><strong>var</strong></li>
        <li><strong>void</strong></li>
        <li><strong>volatile</strong></li>
        <li><strong>while</strong></li>
        <li><strong>with</strong></li>
        <li><strong>yield</strong></li>
    </ul>
    
    <p>Kata-kata yang ditandai dengan <em>baru di ECMAScript 5/6</em> berarti kata kunci tersebut diperkenalkan pada versi ECMAScript 5 dan 6.</p>
    
    <h2>Kata Kunci yang Dihapus</h2>
    <p>Kata kunci berikut telah dihapus dari standar ECMAScript 5/6:</p>
    <ul>
        <li><strong>abstract</strong></li>
        <li><strong>boolean</strong></li>
        <li><strong>byte</strong></li>
        <li><strong>char</strong></li>
        <li><strong>double</strong></li>
        <li><strong>final</strong></li>
        <li><strong>float</strong></li>
        <li><strong>goto</strong></li>
        <li><strong>int</strong></li>
        <li><strong>long</strong></li>
        <li><strong>native</strong></li>
        <li><strong>short</strong></li>
        <li><strong>synchronized</strong></li>
        <li><strong>throws</strong></li>
        <li><strong>transient</strong></li>
        <li><strong>volatile</strong></li>
    </ul>
    <p>Jangan menggunakan kata-kata ini sebagai variabel, karena ECMAScript 5/6 tidak sepenuhnya didukung di semua browser.</p>
    
    <h2>Objek, Properti, dan Metode JavaScript</h2>
    <p>Anda juga harus menghindari penggunaan nama-nama objek, properti, dan metode bawaan JavaScript sebagai identifikator (variabel, fungsi, dll):</p>
    <ul>
        <li><strong>Array</strong></li>
        <li><strong>Date</strong></li>
        <li><strong>eval</strong></li>
        <li><strong>function</strong></li>
        <li><strong>hasOwnProperty</strong></li>
        <li><strong>Infinity</strong></li>
        <li><strong>isFinite</strong></li>
        <li><strong>isNaN</strong></li>
        <li><strong>isPrototypeOf</strong></li>
        <li><strong>length</strong></li>
        <li><strong>Math</strong></li>
        <li><strong>NaN</strong></li>
        <li><strong>name</strong></li>
        <li><strong>Number</strong></li>
        <li><strong>Object</strong></li>
        <li><strong>prototype</strong></li>
        <li><strong>String</strong></li>
        <li><strong>toString</strong></li>
        <li><strong>undefined</strong></li>
        <li><strong>valueOf</strong></li>
    </ul>
    
    <h2>Kata Kunci Java yang Harus Dihindari</h2>
    <p>JavaScript sering digunakan bersama dengan Java. Anda harus menghindari penggunaan beberapa objek dan properti Java sebagai pengidentifikator dalam JavaScript:</p>
    <ul>
        <li><strong>getClass</strong></li>
        <li><strong>java</strong></li>
        <li><strong>JavaArray</strong></li>
        <li><strong>javaClass</strong></li>
        <li><strong>JavaObject</strong></li>
        <li><strong>JavaPackage</strong></li>
    </ul>
    
    <h2>Kata Kunci Lainnya</h2>
    <p>JavaScript bisa digunakan sebagai bahasa pemrograman di berbagai aplikasi. Anda juga harus menghindari penggunaan nama objek dan properti HTML serta objek Window sebagai pengidentifikator JavaScript:</p>
    <ul>
        <li><strong>alert</strong></li>
        <li><strong>all</strong></li>
        <li><strong>anchor</strong></li>
        <li><strong>anchors</strong></li>
        <li><strong>area</strong></li>
        <li><strong>assign</strong></li>
        <li><strong>blur</strong></li>
        <li><strong>button</strong></li>
        <li><strong>checkbox</strong></li>
        <li><strong>clearInterval</strong></li>
        <li><strong>clearTimeout</strong></li>
        <li><strong>clientInformation</strong></li>
        <li><strong>close</strong></li>
        <li><strong>closed</strong></li>
        <li><strong>confirm</strong></li>
        <li><strong>constructor</strong></li>
        <li><strong>crypto</strong></li>
        <li><strong>decodeURI</strong></li>
        <li><strong>decodeURIComponent</strong></li>
        <li><strong>defaultStatus</strong></li>
        <li><strong>document</strong></li>
        <li><strong>element</strong></li>
        <li><strong>elements</strong></li>
        <li><strong>embed</strong></li>
        <li><strong>embeds</strong></li>
        <li><strong>encodeURI</strong></li>
        <li><strong>encodeURIComponent</strong></li>
        <li><strong>escape</strong></li>
        <li><strong>event</strong></li>
        <li><strong>fileUpload</strong></li>
        <li><strong>focus</strong></li>
        <li><strong>form</strong></li>
        <li><strong>forms</strong></li>
        <li><strong>frame</strong></li>
        <li><strong>innerHeight</strong></li>
        <li><strong>innerWidth</strong></li>
        <li><strong>layer</strong></li>
        <li><strong>layers</strong></li>
        <li><strong>link</strong></li>
        <li><strong>location</strong></li>
        <li><strong>mimeTypes</strong></li>
        <li><strong>navigate</strong></li>
        <li><strong>navigator</strong></li>
        <li><strong>frames</strong></li>
        <li><strong>frameRate</strong></li>
        <li><strong>hidden</strong></li>
        <li><strong>history</strong></li>
        <li><strong>image</strong></li>
        <li><strong>images</strong></li>
        <li><strong>offscreenBuffering</strong></li>
        <li><strong>open</strong></li>
        <li><strong>opener</strong></li>
        <li><strong>option</strong></li>
        <li><strong>outerHeight</strong></li>
        <li><strong>outerWidth</strong></li>
        <li><strong>packages</strong></li>
        <li><strong>pageXOffset</strong></li>
        <li><strong>pageYOffset</strong></li>
        <li><strong>parent</strong></li>
        <li><strong>parseFloat</strong></li>
        <li><strong>parseInt</strong></li>
        <li><strong>password</strong></li>
        <li><strong>pkcs11</strong></li>
        <li><strong>plugin</strong></li>
        <li><strong>prompt</strong></li>
        <li><strong>propertyIsEnum</strong></li>
        <li><strong>radio</strong></li>
        <li><strong>reset</strong></li>
        <li><strong>screenX</strong></li>
        <li><strong>screenY</strong></li>
        <li><strong>scroll</strong></li>
        <li><strong>secure</strong></li>
        <li><strong>select</strong></li>
        <li><strong>self</strong></li>
        <li><strong>setInterval</strong></li>
        <li><strong>setTimeout</strong></li>
        <li><strong>status</strong></li>
        <li><strong>submit</strong></li>
        <li><strong>taint</strong></li>
        <li><strong>text</strong></li>
        <li><strong>textarea</strong></li>
        <li><strong>top</strong></li>
        <li><strong>unescape</strong></li>
        <li><strong>untaint</strong></li>
        <li><strong>window</strong></li>
    </ul>
    
    <h2>Handler Event HTML</h2>
    <p>Selain itu, Anda juga harus menghindari penggunaan nama semua handler event HTML. Berikut beberapa contoh handler event HTML yang sebaiknya tidak digunakan sebagai pengidentifikator:</p>
    <ul>
        <li><strong>onblur</strong></li>
        <li><strong>onclick</strong></li>
        <li><strong>onerror</strong></li>
        <li><strong>onfocus</strong></li>
        <li><strong>onkeydown</strong></li>
        <li><strong>onkeypress</strong></li>
        <li><strong>onkeyup</strong></li>
        <li><strong>onmouseover</strong></li>
        <li><strong>onload</strong></li>
        <li><strong>onmouseup</strong></li>
        <li><strong>onmousedown</strong></li>
        <li><strong>onsubmit</strong></li>
    </ul>
    
    <p>Dengan mengetahui dan menghindari penggunaan kata kunci yang dipesan ini, Anda dapat memastikan bahwa kode JavaScript Anda akan berjalan dengan baik dan tidak menyebabkan konflik atau masalah di browser yang berbeda.</p>

    <br>
    <a href="#syntax" class="btn-prev">&larr; Previous</a>
</section>

   <script>
        const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section');
        const prevButtons = document.querySelectorAll('.btn-prev');
        const nextButtons = document.querySelectorAll('.btn-next');

        function showSection(id) {
            sections.forEach(section => {
                if (section.id === id) {
                    section.classList.remove('hidden');
                } else {
                    section.classList.add('hidden');
                }
            });
        }

        function findSectionIndex(id) {
            return Array.from(sections).findIndex(section => section.id === id);
        }

        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                showSection(targetId);

                navLinks.forEach(nav => nav.classList.remove('active'));
                this.classList.add('active');
            });
        });

        nextButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const currentSectionId = this.closest('section').id;
                const currentIndex = findSectionIndex(currentSectionId);
                if (currentIndex < sections.length - 1) {
                    const nextSectionId = sections[currentIndex + 1].id;
                    showSection(nextSectionId);
                    document.querySelector(`.nav-link[href="#${nextSectionId}"]`).classList.add('active');
                }
            });
        });

        prevButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const currentSectionId = this.closest('section').id;
                const currentIndex = findSectionIndex(currentSectionId);
                if (currentIndex > 0) {
                    const prevSectionId = sections[currentIndex - 1].id;
                    showSection(prevSectionId);
                    document.querySelector(`.nav-link[href="#${prevSectionId}"]`).classList.add('active');
                }
            });
        });

        showSection('home');

         const menuIcon = document.getElementById('menu-icon');
            const sidebar = document.querySelector('.sidebar');
    
            menuIcon.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });
    
            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    sidebar.classList.remove('open');
                }
            });
    </script>
</body>
</html>
