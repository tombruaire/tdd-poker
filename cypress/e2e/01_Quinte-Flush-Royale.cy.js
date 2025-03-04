describe("POKER", () => {
    it("Test - Quinte Flush Royale", () => {
        cy.visit('/');
        cy.wait(1000);
        cy.get('select#main_carte1').select('AsCœur');
        cy.get('select#main_carte2').select('RoiCœur');
        cy.get('select#main_carte3').select('DameCœur');
        cy.get('select#main_carte4').select('ValetCœur');
        cy.get('select#main_carte5').select('10Cœur');
        cy.get('button#btnJouer').click();
    })
  })