function verifierLongueur(champ, longueur, champSuivantId) {
    if (champ.value.length === longueur) {
        document.getElementById(champSuivantId).focus();
    }
  }