r sanız veya yapılandırmazsanız, OneDrive eşitleme uygulaması salt okunur klasörlerde izin devralmasını korur. Eşitleme hızı önemli ölçüde daha yavaş olabilir.</string>

    <!-- Automatically adjust the sync app upload rate based on bandwidth availability -->
    <string id="EnableAutomaticUploadBandwidthManagement">OneDrive için otomatik karşıya yükleme bant genişliği yönetimini etkinleştirin</string>
    <string id="EnableAutomaticUploadBandwidthManagement_help">Bu ayar OneDrive eşitleme uygulamasının (OneDrive.exe), yalnızca kullanılmayan bant genişliği olduğunda verileri arka planda karşıya yüklemesine izin verir. Eşitleme uygulamasının, ağ bağlantısını kullanan diğer uygulamaları engellememesini sağlar. Bu ayar, Windows LEDBAT (Düşük Ekstra Gecikmeyle Arka Planda Aktarım) protokolü ile desteklenir. LEDBAT, gecikme artışı (bant genişliğini kullanan başka TCP bağlantıları olduğunu gösterir) algıladığında, eşitleme istemcisi diğer bağlantıları engellememek için kendi bant genişliği kullanımını azaltır. Ağ bağlantısındaki gecikme azaldığında bu, boşta bant genişliği olduğunu gösterir ve eşitleme uygulaması karşıya yükleme hızını artırır, kullanılmayan bant genişliğini kullanmaya başlar.

Bu ayarı etkinleştirdiğinizde eşitleme uygulamasının karşıya yükleme hızı için, kullanılabilen bant genişliğine göre "Otomatik olarak ayarla" seçeneği belirlenir ve diğer kullanıcılar bunu değiştiremez.

Bu ayarı devre dışı bırakır veya yapılandırmazsınız, kullanıcılar karşıya yükleme hızını sabit bir değerle (KB/saniye olarak) sınırlayabilir veya "Otomatik olarak ayarla" seçeneğini belirleyebilir.

Önemli
Bu ayarı etkinleştirdikten veya devre dışı bıraktıktan sonra Yapılandırılmadı olarak değiştirirseniz son yapılandırma etkili olmaya devam eder. "Eşitleme uygulamasını sabit bir hızla sınırla" seçeneğinin yerine bu ayarı etkinleştirmeniz önerilir. Aynı anda iki ayarı da etkinleştirmeyin. Aynı cihazda her iki ayar da etkinleştirilirse, bu ayar "Eşitleme uygulamasının karşıya yükleme hızını aktarım hızının bir yüzdesiyle sınırla" seçeneğini geçersiz kılar.</string>

    <!-- MinDiskSpaceLimitInMB -->
    <!-- configurable limit where low disk space error will occur-->
    <string id="MinDiskSpaceLimitInMB">Kullanıcının disk alanı azaldığında dosya indirmesini engelle</string>
    <string id="MinDiskSpaceLimitInMB_help">Bu ayar, en az miktarda kullanılabilir disk alanı belirtmenize ve kullanıcıların bu tutardan daha azı olduğunda OneDrive sync uygulamasının (OneDrive.exe) dosya indirmesini engellemenize olanak tanır.

Kullanıcılara yer açmak için seçenekler istenir.</string>

    <!-- WarningMinDiskSpaceLimitInMB -->
    <!-- configurable limit where user will be notified they are approaching low disk space -->
    <string id="WarningMinDiskSpaceLimitInMB">Disk alanı düşük olan kullanıcıları uyar</string>
    <string id="WarningMinDiskSpaceLimitInMB_help">Bu ayar, kullanılabilir disk alanı alt sınırını belirlemenize ve OneDrive eşitleme uygulaması (OneDrive.exe), depolama alanının bu sınırın altında kalmasına neden olan bir dosya indirdiğinde kullanıcıyı uyarmanıza olanak sağlar.

Kullanıcıların yer açmasına yardım etmek için seçenekler sunulur.</string>

    <!-- EnableODIgnoreListFromGPO -->
    <string id="EnableODIgnoreListFromGPO">Belirli dosya türlerinin yüklenmesini hariç tutma</string>
    <string id="EnableODIgnoreListFromGPO_help">Bu ayar, OneDrive eşitleme uygulamasının (OneDrive.exe) belirli dosyaları OneDrive veya SharePoint'e yüklemesini önlemek için anahtar kelimeler girmenizi sağlar. "setup.exe" gibi tam adlar girebilir veya bir karakter serisini temsil etmek için joker karakter olarak yıldız işaretini (*) kullanabilirsiniz.  

Bu ayarı etkinleştirirseniz eşitleme uygulaması, belirttiğiniz anahtar kelimelerle eşleşen yeni dosyaları yüklemez. Atlanan dosyalar için hata görünmez ve dosyalar yerel OneDrive klasöründe kalır. Bu ayarı etkinleştirdikten sonra OneDrive eşitleme uygulamasının yeniden başlatılması gerekir. 

Bu ayarı devre dışı bırakırsanız veya yapılandırmazsanız eşitleme uygulaması, tüm eşitlenmiş klasörlere desteklenen tüm dosyaları yükler.</string>

<!-- Disable First Delete Dialog -->
    <string id="DisableFirstDeleteDialog">"Silinen dosyalar her yerde kaldırılır" anımsatıcısını gizleme</string>
    <string id="DisableFirstDeleteDialog_help">Bir kullanıcı yerel dosyaları eşitlenmiş bir konumdan silerse, dosyaların artık kullanıcının tüm aygıtlarında ve web'de kullanılamayacağını belirten bir uyarı iletisi görüntülenir. Bu ayar, uyarı iletisini gizlemenize olanak tanır.

Bu ayarı etkinleştirirseniz, kullanıcılar dosyaları yerel olarak sildiklerinde "Silinen dosyalar her yerde kaldırılır" anımsatıcısını görmezler.

Bu ayarı devre dışı bırakırsanız veya yapılandırmazsanız, kullanıcılar "Bu anımsatıcıyı bir daha gösterme" seçeneğini belirleyene kadar anımsatıcı görüntülenir.</string>


    </stringTable>
    <presentationTable>
      <presentation id="GPOSetUpdateRing_Pres">
        <dropdownList refId="GPOSetUpdateRing_Dropdown" noSort="true" defaultItem="0">Güncelleştirme halkası:</dropdownList>
      </presentation>

      <presentation id="AutomaticUploadBandwidthPercentage_Pres">
        <text>Karşıya dosya yüklenirken kullanılacak en yüksek bant genişliği yüzdesini seçin.</text>
        <text>10 ile 99 arasındaki değerler geçerlidir.</text>
        <decimalTextBox refId="BandwidthSpinBox" defaultValue="70" spinStep="1">Bant genişliği:</decimalTextBox>
      </presentation>

      <presentation id="UploadBandwidthLimit_Pres">
        <text>Karşıya dosya yüklenirken kullanılacak en y