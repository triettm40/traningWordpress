iki są usuwane wszędzie" po usunięciu plików lokalnie.

Jeśli to ustawienie zostanie wyłączone lub nie zostanie skonfigurowane, zostanie wyświetlone przypomnienie, dopóki użytkownicy nie wyebraną ponownie opcji "Nie pokazuj tego przypomnienia".</string>


    </stringTable>
    <presentationTable>
      <presentation id="GPOSetUpdateRing_Pres">
        <dropdownList refId="GPOSetUpdateRing_Dropdown" noSort="true" defaultItem="0">Pierścień aktualizacji:</dropdownList>
      </presentation>

      <presentation id="AutomaticUploadBandwidthPercentage_Pres">
        <text>Wybierz maksymalny procent przepustowości do zajęcia podczas przekazywania plików.</text>
        <text>Prawidłowe wartości to liczby z przedziału 10–99.</text>
        <decimalTextBox refId="BandwidthSpinBox" defaultValue="70" spinStep="1">Przepustowość:</decimalTextBox>
      </presentation>

      <presentation id="UploadBandwidthLimit_Pres">
        <text>Wybierz maksymalną ilość przepustowości do zajęcia podczas przekazywania plików.</text>
        <text>Prawidłowe wartości to liczby od 1 do 100000.</text>
        <decimalTextBox refId="UploadRateValue" defaultValue="125">Przepustowość:</decimalTextBox>
      </presentation>

      <presentation id="DownloadBandwidthLimit_Pres">
        <text>Wybierz maksymalną ilość przepustowości do zajęcia podczas pobierania plików.</text>
        <text>Prawidłowe wartości to liczby od 1 do 100000.</text>
        <decimalTextBox refId="DownloadRateValue" defaultValue="125">Przepustowość:</decimalTextBox>
      </presentation>

       <presentation id="DiskSpaceCheckThresholdMB_Pres">
        <text>Określ identyfikator dzierżawy i maksymalny rozmiar usługi OneDrive użytkownika przed wyświetleniem mu monitu o wybranie folderów do zsynchronizowania.</text>
        <text>W polu Nazwa wartości wprowadź identyfikator dzierżawy. W polu Wartość wprowadź rozmiar.</text>
        <text>Prawidłowe wartości to liczby od 0 do 4294967295 MB (włącznie).</text>
        <listBox refId="DiskSpaceCheckThresholdMBList">Maksymalny rozmiar: </listBox>
      </presentation>

      <presentation id="DefaultRootDir_Pres">
       <text>Określ identyfikator dzierżawy i ścieżkę domyślną.</text>
        <text>W polu Nazwa wartości wprowadź identyfikator dzierżawy. W polu Wartość wprowadź ścieżkę.</text>
        <listBox refId="DefaultRootDirList">Ścieżka: </listBox>
      </presentation>

      <presentation id="DisableCustomRoot_Pres">
        <text>Określ identyfikator dzierżawy i wartość ustawienia.</text>
        <text>W polu Nazwa wartości wprowadź identyfikator dzierżawy. W polu Wartość wprowadź 1, aby włączyć ustawienie, lub wprowadź 0, aby je wyłączyć.</text>
        <listBox refId="DisableCustomRootList">Zmień ustawienie lokalizacji: </listBox>
      </presentation>

      <presentation id="AllowTenantList_Pres">
        <text>Określ identyfikator dzierżawy</text>
        <text>W polu Wartość wprowadź identyfikator dzierżawy, który chcesz dodać do tej listy.</text>
        <text> </text>
        <listBox refId="AllowTenantListBox">Identyfikator dzierżawy: </listBox>
      </presentation>

      <presentation id="BlockTenantList_Pres">
        <text>Określ identyfikator dzierżawy</text>
        <text>W polu Wartość wprowadź identyfikator dzierżawy, który chcesz dodać do tej listy.</text>
        <text> </text>
        <listBox refId="BlockTenantListBox">Identyfikator dzierżawy: </listBox>
       </presentation>

      <presentation id="SharePointOnPremFrontDoorUrl_Pres">
        <text>Podaj adres URL programu SharePoint Server, który hostuje usługę OneDrive dla Firm użytkownika, oraz nazwę organizacji.</text>
        <textBox refId="SharePointOnPremFrontDoorUrlBox">
          <label>Adres URL programu SharePoint Server 2019:</label>
        </textBox>
        <textBox refId="SharePointOnPremTenantNameBox">
          <label>Nazwa organizacji:</label>
        </textBox>
      </presentation>

      <presentation id="SharePointOnPremPrioritization_Pres">
        <dropdownList refId="SharePointOnPremPrioritization_Dropdown" noSort="true" defaultItem="0">Najpierw uwierzytelnij na:</dropdownList>
      </presentation>

      <presentation id="BlockKnownFolderMove_Pres">
        <dropdownList refId="BlockKnownFolderMove_Dropdown" noSort="true" defaultItem="0">Jeśli znane foldery zostały już przeniesione do usługi OneDrive:</dropdownList>
      </presentation>

      <presentation id="KFMOptInWithWizard_Pres">
        <textBox refId="KFMOptInWithWizard_TextBox">
          <label>Identyfikator dzierżawy:</label>
        </textBox>
      </presentation>

      <presentation id="KFMOptInNoWizard_Pres">
        <textBox refId="KFMOptInNoWizard_TextBox">
          <label>Identyfikator dzierżawy:</label>
        </textBox>
        <dropdownList refId="KFMOptInNoWizard_Dropdown" noSort="true" defaultItem="0">Pokaż użytkownikom powiadomienie po przekierowaniu folderów:</dropdownList>
        <text>Opcje folderów:</text>
        <checkBox refId="KFMOptInNoWizard_Desktop_Checkbox" defaultChecked="true">Pulpit</checkBox>
        <checkBox refId="KFMOptInNoWizard_Documents_Checkbox" defaultChecked="true">Dokumenty</checkBox>
        <checkBox refId="KFMOptInNoWizard_Pictures_Checkbox" defaultChecked="true">Obrazy</checkBox>
      </presentation>
      <presentation id="AutoMountTeamSites_Pres">
        <text>Aby określić biblioteki do synchronizacji:

Otwórz przeglądarkę sieci web, zarejestrować się w usłudze Office 365 jako globalnego lub administratora programu SharePoint dla danej organizacji i przejdź do biblioteki do synchronizacji.

Kliknij przycisk "Synchronizuj" na bibliotekę, do której mają być synchronizowane automatycznie, a następnie kliknij przycisk "Kopiuj identyfikator biblioteki."

Kliknij przycisk "Pokaż", a następnie wprowadź przyjazną nazwę do identyfikacji biblioteki w polu Nazwa wartości, a następnie wprowadź identyfikator biblioteki w polu warto